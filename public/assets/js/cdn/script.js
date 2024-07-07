
// Get the current script tag
var scriptTag = document.currentScript;

// Get the data-tooz-banner-id attribute
var toozBannerId = scriptTag.getAttribute('data-tooz-banner-id');

// Output the value to the console (for testing)
console.log('Tooz Banner ID:', toozBannerId);

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
fetch(`http://toolz.at/files/${toozBannerId}`)
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
