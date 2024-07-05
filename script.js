document.getElementById('generate-code').addEventListener('click', function() {
    const placement = document.getElementById('placement').value;
    const bannerText = document.getElementById('banner-text').value;
    const buttonOptions = document.getElementById('button-options').value;
    const customBannerTitle = document.getElementById('banner-title').value || 'Cookie settings';
    const showCheckboxes = buttonOptions === 'all';
    const borderRadius = document.getElementById('border-radius').value;

    const previewInfo = `
    <div id="preview-info" style="display: block;">
        <button id="btn-close-preview" class="btn-close-preview">Close preview</button>
    </div>
    `;

    const bannerHTML = `
    <div id="cookie-consent-banner" class="cookie-consent-banner ${placement}">
        <h3>${customBannerTitle}</h3>
        <p>${bannerText}</p>
        ${showCheckboxes ? `
            <button id="btn-accept" class="cookie-consent-button btn-success">Accept All</button>
            <button id="btn-reject" class="cookie-consent-button btn-grayscale">Reject All</button>
            <button id="btn-settings" class="cookie-consent-button btn-outline">Settings</button>
            <div class="cookie-consent-options">
                <label><input id="consent-necessary" type="checkbox" value="Necessary" checked disabled>Necessary</label>
                <label><input id="consent-analytics" type="checkbox" value="Analytics" checked>Analytics</label>
                <label><input id="consent-preferences" type="checkbox" value="Preferences" checked>Preferences</label>
                <label><input id="consent-marketing" type="checkbox" value="Marketing" checked>Marketing</label>
            </div>
        ` : `
            <button id="btn-accept" class="cookie-consent-button btn-success">Accept</button>
        `}
    </div>
    `;

    const previewInfoElement = document.createRange().createContextualFragment(previewInfo);
    const bannerElement = document.createRange().createContextualFragment(bannerHTML);

    bannerElement.getElementById('cookie-consent-banner').prepend(previewInfoElement);

    const bannerCSS = `
    .cookie-consent-banner {
        position: fixed;
        background-color: #f8f9fa;
        color: black;
        padding: 15px;
        font-size: 14px;
        text-align: center;
        z-index: 1000;
        border-radius: ${borderRadius}px;
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
        bottom: 5px;
        left: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cookie-consent-banner.bottom-right {
        bottom: 5px;
        right: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cookie-consent-banner.bottom-center {
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    `;

    const bannerJS = `
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
    });

    document.getElementById('btn-reject').addEventListener('click', function() {
        setConsentAndHideBanner({
            necessary: false,
            analytics: false,
            preferences: false,
            marketing: false
        });
    });

    // Display the consent banner
    document.getElementById('cookie-consent-banner').style.display = 'block';
    `;

    // Remove any existing style element with id 'dynamic-banner-css'
    const existingStyleElement = document.getElementById('dynamic-banner-css');
    if (existingStyleElement) {
        existingStyleElement.remove();
    }

    // Insert the new CSS into the document head
    const styleElement = document.createElement('style');
    styleElement.id = 'dynamic-banner-css'; // Give it an id for future reference
    styleElement.textContent = bannerCSS;
    document.head.appendChild(styleElement);

    // Update generated code sections (HTML, CSS, JS)
    document.getElementById('generated-html').innerText = bannerHTML;
    document.getElementById('generated-css').innerText = bannerCSS;
    document.getElementById('generated-js').innerText = bannerJS;

    // Set the banner content
    document.getElementById('preview-section').innerText = '';
    document.getElementById('preview-section').append(bannerElement);

    // Show the preview info
    // document.getElementById('preview-info').style.display = 'block';

    document.getElementById('btn-close-preview').addEventListener('click', function () {
        document.getElementById('cookie-consent-banner').style.display = 'none';
    });
});

function copyToClipboard(elementId) {
    const codeElement = document.getElementById(elementId);
    const codeText = codeElement.innerText;

    const textarea = document.createElement('textarea'  );
    textarea.value = codeText;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);

    alert('Code copied to clipboard!');
}

// Function to handle changes in placement selection
function handlePlacementChange() {
    const placement = document.getElementById('placement').value;
    const borderRadiusInput = document.getElementById('border-radius');

    console.log(placement);
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
