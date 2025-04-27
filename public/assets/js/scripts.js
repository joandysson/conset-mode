var toggle = null;
var complementId = 'toolz-' + (new Date()).getTime();

Handlebars.registerHelper('or', function (a, b, options) {
    if (a || b) {
        return options.fn(this);
    } else {
        return options.inverse(this);
    }
});

Handlebars.registerHelper('and', function (a, b, options) {
    if (a && b) {
        return options.fn(this);
    } else {
        return options.inverse(this);
    }
});

function previewInfoHTML() {
    const closePreviewText = document.getElementsByTagName('body')[0].getAttribute('banner-close-preview');

    return `
        <div id="preview-info" style="display: block;">
        <button id="btn-close-preview" class="btn-close-preview">${closePreviewText}</button>
    </div>
    `;
}

function getBannerHTML(placement, customBannerTitle, bannerText, showCheckboxes) {

    const textBtnSuccess = document.getElementById('input-text-success').value;
    const textBtnReject = document.getElementById('input-text-reject').value;
    const textBtnSettings = document.getElementById('input-text-settings').value;

    const linkTerms = document.getElementById('terms').value;
    const linkPoliticsPrivacy = document.getElementById('politics-privacy').value;

    const body = document.getElementsByTagName('body')[0];

    const TermsOfUse = body.getAttribute('banner-terms-of-use')
    const PrivacyPolicy = body.getAttribute('banner-privacy-policy')


    const preferencesTitle = JSON.parse(body.getAttribute('banner-preferences-title'))
    const preferencesDescription = JSON.parse(body.getAttribute('banner-preferences-description'))

    const source = document.getElementById('preview-banner-html').innerHTML;
    const template = Handlebars.compile(source);

    const data = {
        complementId: complementId,
        placement: placement,
        showCheckboxes: showCheckboxes,
        title: customBannerTitle,
        description: bannerText,
        acceptButton: textBtnSuccess,
        rejectButton: textBtnReject,
        settingsButton: textBtnSettings,
        TermsOfUse: TermsOfUse,
        linkTerms: linkTerms,
        PrivacyPolicy: PrivacyPolicy,
        linkPoliticsPrivacy: linkPoliticsPrivacy,
        necessaryTitle: preferencesTitle.necessary,
        necessaryDescription: preferencesDescription.necessary,
        analyticsTitle: preferencesTitle.analytics,
        analyticsDescription: preferencesDescription.analytics,
        preferencesTitle: preferencesTitle.preferences,
        preferencesDescription: preferencesDescription.preferences,
        marketingTitle: preferencesTitle.marketing,
        marketingDescription: preferencesDescription.marketing,
    }

    return {
        config: data,
        code: template(data)
    };
}

function getBannerCSS(borderBanner, inputToggle, btnRadius, inputSuccess, inputReject, inputSettings) {
    const source = document.getElementById('preview-banner-css').innerHTML;

    const data = {
        complementId,
        borderBanner,
        btnRadius,
        inputToggle,
        inputSuccess,
        inputReject,
        inputSettings
    }

    return {
        config: data,
        code: renderTemplate(source, data)
    };
}

function getBannerJS() {
    const source = document.getElementById('preview-banner-js').innerHTML;

    const data = {
        complementId
    }

    return {
        config: data,
        code: renderTemplate(source, data)
    };
}

function getCdn(id) {

    return `
        <script src="https://cdn.toolz.at/banner-cmp.js" data-toolz-banner-id="${id}"></script>
    `
}

function addAndRemoveDynamicStyleCss(bannerCSS) {
    const id = 'dynamic-banner-css';

    // Remove any existing style element with id 'dynamic-banner-css'
    const existingStyleElement = document.getElementById(id);
    if (existingStyleElement) {
        existingStyleElement.remove();
    }

    // Insert the new CSS into the document head
    const styleElement = document.createElement('style');
    styleElement.id = id; // Give it an id for future reference
    styleElement.textContent = bannerCSS;
    document.head.appendChild(styleElement);
}

function replacePreview(bannerElement) {
    document.getElementById('preview-section').innerText = '';
    document.getElementById('preview-section').append(bannerElement);
}

function insertCodeInPage(bannerHTML, bannerCSS, bannerJS) {
    document.getElementById('generated-html').innerText = bannerHTML;
    document.getElementById('generated-css').innerText = bannerCSS;
    document.getElementById('generated-js').innerText = bannerJS;
}

function getBannerElementPreview(previewInfo, bannerHTML) {
    const previewInfoElement = document.createRange().createContextualFragment(previewInfo);
    const bannerElement = document.createRange().createContextualFragment(bannerHTML);
    bannerElement.getElementById('preview-info')?.remove()
    bannerElement.getElementById(`cookie-consent-banner-${complementId}`).prepend(previewInfoElement);

    return bannerElement;
}

function getBannerCode() {
    const placement = document.getElementById('placement').value;
    const bannerText = document.getElementById('banner-text').value;
    const buttonOptions = document.getElementById('button-options').value;
    const customBannerTitle = document.getElementById('banner-title').value;
    const showCheckboxes = buttonOptions === 'all';
    const borderRadius = document.getElementById('border-radius').value;
    const btnRadius = document.getElementById('button-radius').value;

    const inputSuccess = document.getElementById('input-success').value;
    const inputReject = document.getElementById('input-reject').value;
    const inputSettings = document.getElementById('input-settings').value;
    const inputToggle = document.getElementById('input-toggle').value;

    const previewInfo = previewInfoHTML();
    const bannerHTML = getBannerHTML(placement, customBannerTitle, bannerText, showCheckboxes);
    const bannerCSS = getBannerCSS(borderRadius, inputToggle, btnRadius, inputSuccess, inputReject, inputSettings);
    const bannerJS = getBannerJS(showCheckboxes)

    return [previewInfo, bannerHTML, bannerCSS, bannerJS]
}

function generatePreview() {
    const [previewInfo, bannerHTML, bannerCSS, bannerJS] = getBannerCode();

    const bannerElementPreview = getBannerElementPreview(previewInfo, bannerHTML.code)
    addAndRemoveDynamicStyleCss(bannerCSS.code)
    replacePreview(bannerElementPreview)

    document.getElementById('btn-close-preview').addEventListener('click', function () {
        document.getElementById(`cookie-consent-banner-${complementId}`).style.display = 'none';
    });

    document.getElementById(`btn-settings-${complementId}`)?.addEventListener('click', () => {
        const element = document.getElementById(`cookie-consent-options-${complementId}`);
        const display = element.style.display === 'flex' ? 'none' : 'flex'
        document.getElementById(`cookie-consent-options-${complementId}`).style.display = display
        toggle = display
    });

    document.getElementById(`cookie-consent-banner-${complementId}`).style.display = 'block';

    return [bannerHTML, bannerCSS, bannerJS]
}

function getExampleCode(html, css, js) {
    return `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Toolz.at - Banner</title>
        <style>
            ${css}
        </style>
    </head>
    <body>
        ${html}
        <script>
        ${js}
        </script>
    </body>
    </html>
    `;
}

document.getElementById('generate-code')?.addEventListener('click', async () => {
    const [bannerHTML, bannerCSS, bannerJS] = generatePreview()
    insertCodeInPage(bannerHTML.code, bannerCSS.code, bannerJS.code)
});

document.getElementById('example-code')?.addEventListener('click', async () => {
    const [bannerHTML, bannerCSS, bannerJS] = generatePreview()

    const exempleCode = getExampleCode(bannerHTML.code, bannerCSS.code, bannerJS.code);
    const blob = new Blob([exempleCode], { type: 'application/json' });
    const url = URL.createObjectURL(blob)

    const link = document.createElement('a');
    link.href = url;
    link.download = 'data.html';

    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    URL.revokeObjectURL(url);
});

document.getElementById('cdn-code')?.addEventListener('click', async (e) => {
    e.target.setAttribute('disabled', 'disabled')
    const [bannerHTML, bannerCSS, bannerJS] = generatePreview()

    const jsonData = {
        template: 'default',
        config: {
            html: bannerHTML.config,
            css: bannerCSS.config,
            js: bannerJS.config
        }
    };

    const uploadUrl = '/cdn/create';
    const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(jsonData)
    };

    try {
        const response = await fetch(uploadUrl, requestOptions);
        if (response.ok) {
            const data = await response.json();
            document.getElementById('generated-link').innerText = getCdn(data.id).trim();
            document.getElementById('banner-id').innerText = data.id;
            document.getElementById('result').style = 'display:block'
            console.log('Files uploaded successfully!');
        } else {
            console.error('Failed to upload files.');
        }

        e.target.removeAttribute('disabled')
    } catch (error) {
        e.target.removeAttribute('disabled')
        console.error('Error uploading files:', error.message);
        if (error.response) {
            console.error('Server responded with:', error.response.status);
        }
    }
});

function copyToClipboard(elementId) {
    const codeElement = document.getElementById(elementId);
    const codeText = codeElement.innerText;
    navigator.clipboard.writeText(codeText);
    alert('Code copied to clipboard!');
}

// Function to handle changes in placement selection
function handlePlacementChange() {
    const placement = document.getElementById('placement').value;
    const borderRadiusInput = document.getElementById('border-radius');

    // Disable the border radius input for 'bottom' and 'top' placements
    if (placement === 'bottom' || placement === 'top') {
        borderRadiusInput.disabled = true;
    } else {
        borderRadiusInput.disabled = false;
    }
}

// Add event listener to placement select element
document.getElementById('placement').addEventListener('change', handlePlacementChange);

// Call the function initially to set the initial state based on the default value
handlePlacementChange();

document.addEventListener('DOMContentLoaded', (_) => {
    const form = document.getElementById('customization-form');

    form.addEventListener('input', (event) => {
        const input = event.target;
        generatePreview()

        const display = input.name === 'input-toggle' ? 'flex' : toggle
        if (document.getElementById(`cookie-consent-options-${complementId}`)) {
            document.getElementById(`cookie-consent-options-${complementId}`).style.display = display
            toggle = display
        }

        if (input.type === 'number' && input.value > 10) {
            input.value = 10
        }

    });
});


function renderTemplate(template, data) {
    template = template.replace(/\{\{#if (.*?)\}\}([\s\S]*?)\{\{\/if\}\}/g, (match, condition, content) => {
        condition = condition.replace(/\b(\w+)\b/g, key => data[key] !== undefined ? `data["${key}"]` : key);

        try {
            if (eval(condition)) {
                return content;
            } else {
                return '';
            }
        } catch (e) {
            console.error('Erro no IF do template:', e);
            return '';
        }
    });

    template = template.replace(/\{\{(.*?)\}\}/g, (match, key) => {
        key = key.trim();
        return data[key] !== undefined ? data[key] : '';
    });

    return template;
}
