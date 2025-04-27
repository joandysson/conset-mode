// Get the current script tag
const scriptTag = document.currentScript;

// Get the data-toolz-banner-id attribute
const toolzBannerId = scriptTag.getAttribute('data-toolz-banner-id');
const src = scriptTag.getAttribute('src');

const url = new URL(src)
const searchParams = new URLSearchParams(url.searchParams)
const paramBannerId = searchParams.get('banner_id')
var gtmUtmSource = searchParams.get('utm_source')

// Output the value to the console (for testing)
const bannerId = toolzBannerId || paramBannerId
console.log('Banner ID:', bannerId);

(function () {
    if (bannerId === undefined || bannerId === null) {
        console.log('Toolz Banner ID not found')
        return
    }


    function appendBanner(html,css,js) {
        const styleElement = document.createElement('style');
        styleElement.id = 'fetched-css';
        document.head.appendChild(styleElement);
        styleElement.innerHTML = css;

        const htmlContentDiv = document.createElement('div');
        htmlContentDiv.id = 'html-content';
        document.body.appendChild(htmlContentDiv);
        htmlContentDiv.innerHTML = html;

        const jsContentDiv = document.createElement('script');
        jsContentDiv.id = 'js-content';
        document.body.appendChild(jsContentDiv);
        jsContentDiv.innerHTML = js;
    }


    // Fetch data and insert content
    fetch(`https://toolz.at/files/${bannerId}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error('Error:', data.error);
                return;
            }

            appendBanner(data['html'],data['css'],data['js'])
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });

})()
