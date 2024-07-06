var toggle = null;

function previewInfoHTML() {
   return `
    <div id="preview-info" style="display: block;">
        <button id="btn-close-preview" class="btn-close-preview">Close preview</button>
    </div>
    `;
}

function getBannerHTML(placement, customBannerTitle, bannerText, showCheckboxes) {
    return `
    <div id="cookie-consent-banner" class="cookie-consent-banner ${placement}">
        ${customBannerTitle ? `<h3>${customBannerTitle}</h3>`: ''}
        <p>${bannerText}</p>
        ${showCheckboxes ? `
            <button id="btn-accept" class="cookie-consent-button btn-success">Accept</button>
            <button id="btn-reject" class="cookie-consent-button btn-reject">Reject</button>
            <button id="btn-settings" class="cookie-consent-button btn-settings">Settings</button>
            <div id="cookie-consent-options" class="cookie-consent-options">
                <div class="settings-cookies-container">
                    <div class="option">
                        <label for="consent-necessary" data-type="title" >Necessary</label>
                        <label class="toggle">
                            <input id="consent-necessary" type="checkbox" value="Necessary" checked disabled>
                            <span class="slider principal"></span>
                        </label>
                        <p class="description">Enable essential cookies for the website to function properly.</p>
                    </div>
                    <div class="option">
                        <label for="consent-analytics" data-type="title">Analytics</label>
                        <label class="toggle">
                            <input id="consent-analytics" type="checkbox" value="Analytics" checked>
                            <span class="slider"></span>
                        </label>
                        <p class="description">Allow anonymous tracking of website usage to improve user experience.</p>
                    </div>
                    <div class="option">
                        <label for="consent-preferences" data-type="title">Preferences</label>
                        <label class="toggle">
                            <input id="consent-preferences" type="checkbox" value="Preferences" checked>
                            <span class="slider"></span>
                        </label>
                        <p class="description">Remember user preferences such as language and region settings.</p>
                    </div>
                    <div class="option">
                        <label for="consent-marketing" data-type="title">Marketing</label>
                        <label class="toggle">
                            <input id="consent-marketing" type="checkbox" value="Marketing" checked>
                            <span class="slider"></span>
                        </label>
                        <p class="description">Enable personalized advertisements based on user interests and behavior.</p>
                    </div>
                </div>
            </div>
        ` : `
            <button id="btn-accept" class="cookie-consent-button btn-success">Accept</button>
        `}
    </div>
    `;
}

function getBannerCSS(borderRadius, inputToggle, btnRadius, inputSuccess, inputReject, inputSettings) {
    return `
    .cookie-consent-banner {
        position: fixed;
        display: none;
        background-color: #f8f9fa;
        color: black;
        padding: 15px;
        font-size: 14px;
        text-align: center;
        z-index: 1000;
        border-radius: ${borderRadius > 10 ? 10: borderRadius }px;
    }

    .cookie-consent-banner.bottom {
        bottom: 0;
        left: 0;
        right: 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    }

    .cookie-consent-banner.top {
        top: 0;
        left: 0;
        right: 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .cookie-consent-banner.bottom-left {
        max-width: 660px;
        bottom: 15px;
        left: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .cookie-consent-banner.bottom-right {
        max-width: 660px;
        bottom: 15px;
        right: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .cookie-consent-banner.bottom-center {
        width: 100%;
        max-width: 660px;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .cookie-consent-options {
        display: none;
        flex-direction: column;
        align-items: center;
    }

    .settings-cookies-container {
        margin-top: 20px;
        padding: 10px;
        margin-top: 15px;
        background-color: #f3f3f3;
        border-radius: ${borderRadius > 10 ? 10: borderRadius }px;
    }

    .option {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin: 10px 0;
        width: 100%;
        max-width: 650px;
    }

    .option label {

        font-weight: bold;
        text-align: left;
    }

    .option label[data-type="title"] {
        min-width: 85px
    }

    .option .toggle {
        display: inline-block;
        width: 50px;
        height: 26px;
        position: relative;
    }

    .option .toggle input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .option .toggle .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 15px;
    }

    .option .toggle .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    .option .toggle input:checked + .slider {
        background-color: ${inputToggle};
    }

    .option .toggle input:checked + .slider.principal {
        background-color: #ff0000;
    }

    .option .toggle input:checked + .slider:before {
        transform: translateX(20px);
    }

    .option p.description {
        flex: 1;
        font-size: 0.9rem;
        color: #666;
        text-align: justify;
        margin: 0;
        padding-left: 10px;
    }

    .cookie-consent-button {
        padding: 8px 16px;
        font-size: 1rem;
        cursor: pointer;
        border: none;
        border-radius: ${btnRadius > 10 ? 10 : btnRadius}px;
        color: #fff;
        margin: 1px 0;
    }

    .cookie-consent-button:active {
        opacity: 0.8;
    }

    .btn-success {
        background-color: ${inputSuccess}
    }

    .btn-success:hover {
        background-color: ${inputSuccess};
    }

    .btn-reject {
        background-color: ${inputReject}
    }

    .btn-reject:hover {
        background-color: ${inputReject};
    }

    .btn-settings {
        background-color: ${inputSettings}
    }

    .btn-settings:hover {
        background-color: ${inputSettings};
    }

    @media only screen and (max-width: 720px) {
        .cookie-consent-banner {
            width: auto !important;
            right: 0 !important;
            left: 0 !important;
            transform: translateX(0%) !important;
            margin: 0 1px;
        }
    }
    `;

}

function getBannerJS(showCheckboxes) {
    return `
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }

    if(localStorage.getItem('consentMode') === null){
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'analytics_storage': 'denied',
            'personalization_storage': 'denied',
            'functionality_storage': 'denied',
            'security_storage': 'denied',
        });
    } else {
        gtag('consent', 'default', JSON.parse(localStorage.getItem('consentMode')));
    }

    // Function to set consent preferences and hide banner
    function setConsentAndHideBanner(consent) {
        const consentMode = {
            'functionality_storage': consent.necessary ? 'granted' : 'denied',
            'security_storage': consent.necessary ? 'granted' : 'denied',
            'ad_storage': consent.marketing ? 'granted' : 'denied',
            'analytics_storage': consent.analytics ? 'granted' : 'denied',
            'personalization_storage': consent.preferences ? 'granted' : 'denied',
        };
        gtag('consent', 'update', consentMode);
        localStorage.setItem('consentMode', JSON.stringify(consentMode));
        hideBanner();
    }

    // Function to hide the consent banner
    function hideBanner() {
        document.getElementById('cookie-consent-banner').style.display = 'none';
    }

    // Attach event listeners after inserting banner HTML into the DOM
    document.getElementById('btn-accept').addEventListener('click', function() {
        setConsentAndHideBanner({
            necessary: true,
            analytics: document.getElementById('consent-analytics').checked,
            preferences: document.getElementById('consent-preferences').checked,
            marketing: document.getElementById('consent-marketing').checked
        });

        setCookie('cookieConsent', 'accepted', 30);
    });

    document.getElementById('btn-reject').addEventListener('click', function() {
        setConsentAndHideBanner({
            necessary: true,
            analytics: false,
            preferences: false,
            marketing: false
        });

        setCookie('cookieConsent', 'reject', 30);
    });

    ${showCheckboxes ? `
        document.getElementById('btn-settings').addEventListener('click', function() {
            const element = document.getElementById('cookie-consent-options');
            if(element.style.display === 'flex') {
                document.getElementById('cookie-consent-options').style.display = 'none'
            } else {
                document.getElementById('cookie-consent-options').style.display = 'flex'
            }
        });
        `: ``}


    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    }

    const consent = getCookie('cookieConsent');
    if (!consent) {
        // Display the consent banner
        document.getElementById('cookie-consent-banner').style.display = 'block';
    }
    `;
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
    bannerElement.getElementById('cookie-consent-banner').prepend(previewInfoElement);

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

function generatepreview() {
    const [previewInfo, bannerHTML, bannerCSS, bannerJS] = getBannerCode();

    const bannerElementPreview = getBannerElementPreview(previewInfo, bannerHTML)
    addAndRemoveDynamicStyleCss(bannerCSS)
    replacePreview(bannerElementPreview)

    document.getElementById('btn-close-preview').addEventListener('click', function () {
        document.getElementById('cookie-consent-banner').style.display = 'none';
    });

    document.getElementById('btn-settings')?.addEventListener('click', () => {
        const element = document.getElementById('cookie-consent-options');
        const display = element.style.display === 'flex' ? 'none': 'flex'
        document.getElementById('cookie-consent-options').style.display = display
        toggle = display
    });

    document.getElementById('cookie-consent-banner').style.display = 'block';

    return [bannerHTML, bannerCSS, bannerJS]
}

document.getElementById('generate-code').addEventListener('click', () => {
    const [bannerHTML, bannerCSS, bannerJS] = generatepreview()

    insertCodeInPage(bannerHTML, bannerCSS, bannerJS)
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
        generatepreview()

        const display = input.name === 'input-toggle' ? 'flex' : toggle
        if(document.getElementById('cookie-consent-options')) {
            document.getElementById('cookie-consent-options').style.display = display
            toggle = display
        }

        if(input.type === 'number' && input.value > 10) {
            input.value = 10
        }

    });
});
