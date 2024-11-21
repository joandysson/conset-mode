// Get the current script tag
const scriptTag = document.currentScript;

// Get the data-toolz-banner-id attribute
const toolzBannerId = scriptTag.getAttribute('data-toolz-banner-id');
const src = scriptTag.getAttribute('src');

const url  = new URL(src)
const searchParams = new URLSearchParams(url.searchParams)
const paramBannerId = searchParams.get('banner_id')

// Output the value to the console (for testing)
console.log('Toolz Banner ID:', toolzBannerId);

const bannerId = toolzBannerId || paramBannerId
console.log('Banner ID:', bannerId);


(function () {
    if(bannerId === undefined || bannerId === null) {
        console.log('Toolz Banner ID not found')
        return
     }

    // Create elements
    const styleElement = document.createElement('style');
    styleElement.id = 'fetched-css';
    document.head.appendChild(styleElement);

    const htmlContentDiv = document.createElement('div');
    htmlContentDiv.id = 'html-content';
    document.body.appendChild(htmlContentDiv);

    const jsContentDiv = document.createElement('script');
    jsContentDiv.id = 'js-content';
    document.body.appendChild(jsContentDiv);

    // Fetch data and insert content
    fetch(`https://toolz.at/files/${bannerId}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error('Error:', data.error);
            } else {
                document.getElementById('html-content').innerHTML = data['data.html'];
                document.getElementById('fetched-css').innerHTML = data['data.css'];

                const scriptElement = document.createElement('script');
                scriptElement.textContent = data['data.js'];
                document.getElementById('js-content').appendChild(scriptElement);
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });

})()
