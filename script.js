document.getElementById('generate-code').addEventListener('click', function() {
    const placement = document.getElementById('placement').value;
    const bannerText = document.getElementById('banner-text').value;
    const buttonOptions = document.getElementById('button-options').value;
    const customBannerTitle = document.getElementById('banner-title').value || 'Cookie settings';
    const showCheckboxes = buttonOptions === 'all';

    const previewInfo = `
    <div id="preview-info" style="display: block;">
        <button id="btn-close-preview" class="btn-close-preview">Clone preview</button>
    </div>
    `

    const bannerHTML = `
    <div id="cookie-consent-banner" class="cookie-consent-banner ${placement}">
        <h3>${customBannerTitle}</h3>
        <p>${bannerText}</p>
        ${showCheckboxes ? `
            <button id="btn-accept-all" class="cookie-consent-button btn-success">Accept All</button>
            <button id="btn-accept-some" class="cookie-consent-button btn-outline">Accept Selection</button>
            <button id="btn-reject-all" class="cookie-consent-button btn-grayscale">Reject All</button>
            <div class="cookie-consent-options">
                <label><input id="consent-necessary" type="checkbox" value="Necessary" checked disabled>Necessary</label>
                <label><input id="consent-analytics" type="checkbox" value="Analytics" checked>Analytics</label>
                <label><input id="consent-preferences" type="checkbox" value="Preferences" checked>Preferences</label>
                <label><input id="consent-marketing" type="checkbox" value="Marketing">Marketing</label>
            </div>
        ` : `
            <button id="btn-accept-all" class="cookie-consent-button btn-success">Accept</button>
        `}
    </div>
    `;

    const previewInfoElement = document.createRange().createContextualFragment(previewInfo);
    const bannerElement = document.createRange().createContextualFragment(bannerHTML);

    bannerElement.getElementById('cookie-consent-banner').prepend(previewInfoElement);

    const bannerCSS = `
    .cookie-consent-banner {
        display: none;
        position: fixed;
        left: 0;
        right: 0;
        background-color: #f8f9fa;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        color: black;
        padding: 15px;
        font-size: 14px;
        text-align: center;
        z-index: 1000;
    }

    .cookie-consent-banner.${placement} {
        ${placement === 'bottom' ? 'bottom: 0;' : placement === 'top' ? 'top: 0;' : ''}
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
    document.getElementById('btn-accept-all').addEventListener('click', function() {
        setConsentAndHideBanner({
            necessary: true,
            analytics: true,
            preferences: true,
            marketing: true
        });
    });

    document.getElementById('btn-accept-some').addEventListener('click', function() {
        setConsentAndHideBanner({
            necessary: true,
            analytics: document.getElementById('consent-analytics').checked,
            preferences: document.getElementById('consent-preferences').checked,
            marketing: document.getElementById('consent-marketing').checked
        });
    });

    document.getElementById('btn-reject-all').addEventListener('click', function() {
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
