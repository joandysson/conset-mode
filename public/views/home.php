<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => 'Consent Mode Generator - Use For Free',
    'description' => 'Create a free consent mode banner for your website with our easy-to-use tool. Ensure compliance with GDPR, LGPD, and CCPA while providing a seamless user experience. Customize design, placement, and functionality to match your brand, all while respecting user privacy. Perfect for websites of all sizes, our solution helps you stay aligned with global data privacy regulations without hassle. Try it now and make your website compliant today!.',
    'keywords' => 'GDPR, LGPD, CCPA, consent mode banner, custom consent banner, free consent banner tool, website compliance, HTML CSS JavaScript snippets, privacy regulations'
];
?>

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <nav>
        <ul class="menu">
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#configuration">Configuration</a></li>
            <li><a href="#data-privacy-laws">Data Privacy Laws</a></li>
        </ul>
    </nav>

    <header>
        <a href="/">
            <img src="<?php echo asset('images/png/logo.png') ?>" alt="">
            <h1>Consent <span class="blue">Mode</span> Banner</h1>
        </a>
        <p>Create custom, data privacy and law-compliant consent banners for your website with ease.</p>
    </header>
    <main class="container">
        <!-- How It Works Section -->
        <section class="how-it-works-section">
            <h2 id="how-it-works">How It Works</h2>
            <div class="steps-grid">
                <div class="step">
                    <div class="step-icon">1️⃣</div>
                    <div class="step-content">
                        <h3>Select Preferences</h3>
                        <p>Choose your preferred banner placement, title, and button options.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">2️⃣</div>
                    <div class="step-content">
                        <h3>Customize Appearance</h3>
                        <p>Adjust the banner's appearance by setting the border radius, colors, and text.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">3️⃣</div>
                    <div class="step-content">
                        <h3>Generate Code</h3>
                        <p>Click the generate button to receive your personalized banner code.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">4️⃣</div>
                    <div class="step-content">
                        <h3>Implement</h3>
                        <p>Copy the generated code and insert it into your website's HTML.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="configuration" class="section-default">
            <h2>Configuration</h2>
            <!-- Your configuration form and code generation UI goes here -->
            <div id="customization-ui">
                <h3>Customize Your Consent Banner (<a href="#banner-configuration-options">See How to Configure</a>)</h3>
                <form id="customization-form">
                    <label for="banner-title">Banner Title:</label>
                    <input type="text" id="banner-title" value="Cookie settings" placeholder="Cookie settings">

                    <label for="banner-text">Banner Text:</label>
                    <textarea id="banner-text" name="banner-text">We use cookies to provide you with the best possible experience...</textarea>


                    <label for="terms">Terms of use (Link)</label>
                    <input type="url" id="terms" name="terms" value="" placeholder="https://toolz.at/terms">

                    <label for="politics-privacy">Politics Privacy:</label>
                    <input type="url" id="politics-privacy" name="politics-privacy" value="" placeholder="https://toolz.at/politics-privacy">

                    <label for="button-options">Button Options:</label>
                    <select id="button-options" name="button-options">
                        <option value="all">Show All Buttons</option>
                        <option value="accept-only">Accept Only Button</option>
                    </select>

                    <div class="input-group">
                        <div class="btn-group-child">
                            <label for="input-text-success">Accept Button Text:</label>
                            <input id="input-text-success" name="input-text-success" type="text" value="Accept" placeholder="Accept">
                        </div>

                        <div class="btn-group-child">
                            <label for="input-text-reject">Reject Button Text:</label>
                            <input id="input-text-reject" name="input-text-reject" type="text" value="Reject" placeholder="Reject">
                        </div>

                        <div class="btn-group-child">
                            <label for="input-text-settings">Settings Button Text:</label>
                            <input id="input-text-settings" name="input-text-settings" type="text" value="Settings" placeholder="Settings">
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="color-group-child">
                            <label for="input-success">Accept Button Color:</label>
                            <input type="color" id="input-success" name="input-success" value="#007bff">
                        </div>

                        <div class="color-group-child">
                            <label for="input-reject">Reject Button Color:</label>
                            <input type="color" id="input-reject" name="input-reject" value="#007bff">
                        </div>

                        <div class="color-group-child">
                            <label for="input-settings">Settings Button Color:</label>
                            <input type="color" id="input-settings" name="input-settings" value="#007bff">
                        </div>

                        <div class="color-group-child">
                            <label for="input-toggle">Toggle:</label>
                            <input type="color" id="input-toggle" name="input-toggle" value="#007bff">
                        </div>
                    </div>

                    <label for="placement">Banner Placement:</label>
                    <select id="placement" name="placement">
                        <option value="bottom">Bottom</option>
                        <option value="top">Top</option>
                        <option value="bottom-left">Bottom Left</option>
                        <option value="bottom-right">Bottom Right</option>
                        <option value="bottom-center">Bottom Center</option>
                    </select>

                    <label for="button-radius">Button Radius (0-10px):</label>
                    <input type="number" id="button-radius" name="button-radius" min="0" max="10" value="0">

                    <label for="border-radius">Border Radius (0-10px):</label>
                    <input type="number" id="border-radius" name="border-radius" min="0" max="10" value="0">

                    <!-- <button type="button" id="generate-code">Generate Code</button>
                        <button type="button" id="example-code">Download Code</button> -->
                    <button type="button" id="cdn-code">Generate Banner</button>
                </form>

                <div id="result" class="result">
                    <h3>This is your banner ID</h3>
                    <div class="code-section">
                        <pre><code id="banner-id"></code></pre>
                        <button onclick="copyToClipboard('banner-id')">Copy</button>
                    </div>


                    <h3>Generated CDN Code (Place inside &lt;body&gt; tag)</h3>
                    <div class="code-section">
                        <pre><code id="generated-link"></code></pre>
                        <button onclick="copyToClipboard('generated-link')">Copy</button>
                    </div>
                </div>


                <!--                    <h3>Generated Code</h3>-->
                <!--                    <div class="code-section">-->
                <!--                        <h4>HTML Code (Place inside &lt;body&gt; tag)</h4>-->
                <!--                        <pre><code id="generated-html"></code></pre>-->
                <!--                        <button onclick="copyToClipboard('generated-html')">Copy HTML Code</button>-->
                <!---->
                <!--                        <h4>CSS Code (Place inside &lt;head&gt; tag or external stylesheet)</h4>-->
                <!--                        <pre><code id="generated-css"></code></pre>-->
                <!--                        <button onclick="copyToClipboard('generated-css')">Copy CSS Code</button>-->
                <!---->
                <!--                        <h4>JavaScript Code (Place before closing &lt;/body&gt; tag)</h4>-->
                <!--                        <pre><code id="generated-js"></code></pre>-->
                <!--                        <button onclick="copyToClipboard('generated-js')">Copy JS Code</button>-->
                <!--                    </div> -->
            </div>
        </section>
        <div class="space"></div>
        <section id="data-privacy-laws" class="data-privacy-laws">
            <h2>Data Privacy Laws</h2>
            <p class="text-center">Overview of key regulations protecting your data</p>
            <div class="law">
                <h3>GDPR (General Data Protection Regulation)</h3>
                <p>A European Union regulation that ensures the protection of personal data and privacy for individuals within the EU. It mandates transparency, user consent, and the right to access, correct, and delete personal data.</p>
            </div>
            <div class="law">
                <h3>LGPD (Lei Geral de Proteção de Dados)</h3>
                <p>Brazil's data protection law designed to protect personal data and privacy. It gives individuals rights to access, correct, and delete their data, and requires businesses to obtain clear consent for data processing.</p>
            </div>
            <div class="law">
                <h3>CCPA (California Consumer Privacy Act)</h3>
                <p>A U.S. regulation granting California residents rights to know how their data is used, request deletion, and opt-out of data sales. It emphasizes transparency and user control over personal information.</p>
            </div>
            <div class="law">
                <h3>Other Laws</h3>
                <p>Similar regulations exist worldwide, such as Canada's PIPEDA, Australia's Privacy Act, and Japan's APPI. These laws aim to protect user privacy, ensure data security, and hold businesses accountable for data practices.</p>
            </div>
            <div class="note">
                <p><strong>Note:</strong> These laws vary by region but share common goals of protecting individual privacy, ensuring transparency, and granting users control over their data.</p>
            </div>
        </section>
        <div class="space"></div>
        <section id="cookie-banner-requirements" class="cookie-banner-necessity">
            <h2>Cookie Banner Requirements</h2>
            <div class="content">
                <p>A cookie banner is typically required on websites to comply with data protection laws like GDPR, LGPD, and CCPA. Its purpose is to inform users about the use of cookies and to obtain their consent for non-essential cookies.</p>
                <h3>When is a banner necessary?</h3>
                <p>A banner is required if your website uses cookies for purposes such as analytics, marketing, or personalizing user preferences. These cookies require explicit user consent.</p>
                <h3>Are banners required for necessary cookies?</h3>
                <p>In most jurisdictions, such as under GDPR, LGPD, and similar laws, banners are not required if your website only uses cookies that are strictly necessary for functionality. Examples include session cookies, authentication tokens, and cookies required for security or completing purchases. These cookies do not require user consent but must still be disclosed in the site's privacy policy.</p>
                <h3>Key Notes:</h3>
                <ul>
                    <li><strong>GDPR:</strong> Requires consent for all cookies except those strictly necessary for functionality.</li>
                    <li><strong>LGPD:</strong> Similar to GDPR, consent is needed for non-essential cookies.</li>
                    <li><strong>CCPA:</strong> Does not mandate consent banners but requires websites to inform users about data collection and provide opt-out options for data sales.</li>
                </ul>
                <div class="note">
                    <p><strong>Summary:</strong> Use a banner when deploying non-essential cookies. For strictly necessary cookies, disclosure in your privacy policy is sufficient in most cases.</p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="data-categories" class="data-categories">
            <h2>Data Categories</h2>
            <p class="text-center">Understanding how we use your data</p>
            <div class="category">
                <h3>Necessary</h3>
                <p><strong>Essential for website functionality:</strong> This category includes data that is strictly necessary for the website to function properly.</p>
                <ul>
                    <li>Examples: Session cookies, authentication tokens, and data required to complete a purchase.</li>
                    <li><strong>User consent:</strong> Typically, users don't have the option to opt-out of necessary data processing.</li>
                </ul>
            </div>
            <div class="category">
                <h3>Marketing</h3>
                <p><strong>Used for targeted advertising:</strong> This category includes data used to personalize ads and track user behavior for marketing purposes.</p>
                <ul>
                    <li>Examples: Cookies that track browsing history, demographic information, and interests.</li>
                    <li><strong>User consent:</strong> Users can usually opt-out of marketing data processing.</li>
                </ul>
            </div>
            <div class="category">
                <h3>Analytics</h3>
                <p><strong>Used for website performance and user behavior:</strong> This category includes data used to analyze website traffic, user engagement, and other metrics to improve the website's performance.</p>
                <ul>
                    <li>Examples: Cookies that track page views, time spent on site, and click-through rates.</li>
                    <li><strong>User consent:</strong> Users can usually opt-out of analytics data processing.</li>
                </ul>
            </div>
            <div class="category">
                <h3>Preferences</h3>
                <p><strong>Used for personalized user experience:</strong> This category includes data used to customize the website's appearance or content based on user preferences.</p>
                <ul>
                    <li>Examples: Cookies that remember language preferences, theme choices, or previously viewed products.</li>
                    <li><strong>User consent:</strong> Users can usually opt-out of preference data processing.</li>
                </ul>
            </div>
            <div class="note">
                <p><strong>Summary:</strong> Necessary data is essential for the website to function. Marketing data is used to target ads and track user behavior. Analytics data is used to analyze website performance. Preferences data is used to personalize the user experience. Users typically have more control over marketing, analytics, and preference data processing.</p>
            </div>
        </section>
        <div class="space"></div>
        <section id="banner-configuration-options" class="banner-configuration-guide">
            <h2>Banner Configuration Options</h2>
            <div class="content">
                <p>Customize your consent banner directly from our site to meet your website's needs. Below are the configuration options available and how they affect the banner's behavior:</p>
                <p>These are all the configuration options you can make on your banner, below we will explain each section.</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/preferences.png') ?>">
                </div>

                <h3>Once you start editing, a pop-up like this will appear with the name <em> "Close Preview"</em> </h3>
                <p>From this point on you can see all the settings you are making</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner.png') ?>">
                </div>

                <h3>By clicking on settings you can also see the cookie settings</h3>
                <p>These are the options that a user can choose.
                    <a href="#data-categories">learning more here.</a>
                </p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner-preference.png') ?>">
                </div>

                <hr>

                <h3>1. Configure title and description of your banner</h3>
                <p>This information appears for the user to read and understand what it is.</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/title-and-description.png') ?>">
                </div>
                <!-- <h3>1. Define Cookie Categories</h3>
                    <p>Configure which cookie categories (e.g., Necessary, Marketing, Analytics, Preferences) appear on the banner and set their default states.</p>
                    <div class="example-image">
                        <p><em>Insert an image here showing the interface for managing cookie categories.</em></p>
                    </div> -->

                <h3>2. Design the Banner's Appearance</h3>
                <p>Customize the banner's style, including colors, borders, and placement on the page (top, bottom, or modal).</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/aparence.png') ?>">
                </div>

                <h3>4. Choose buttons options</h3>
                <p>Enable all buttons or not and customize button name.</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/button-options.png') ?>">
                </div>

                <h3>5. Adding terms and policy</h3>
                <p>You can add your terms of service and privacy policy to your banner</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/terms-and-politics.png') ?>">
                </div>


                <h3>6. Save</h3>
                <p>You just need to click on <strong><em>Generate Banner</em></strong> button and a code will be displayed below
                    <br>
                    see how:
                    <br>
                    <a href="#how-to-configure-consent-mode">
                        Configure it on your website
                    </a>
                    <br>
                    <!-- <a href="#">
                            how Configure it on your website with google tag manager
                        </a> -->
                </p>

                <div class="note">
                    <p>Using these configuration options, you can create a consent banner tailored to your website's branding and legal compliance needs.</p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="how-to-configure-consent-mode" class="consent-mode-tutorial">
            <h2>How to Configure Consent Mode on Your Website</h2>
            <div class="content">
                <p>Follow this step-by-step tutorial to implement consent mode on your website using the provided script. This ensures compliance with data protection laws while maintaining control over cookie behavior.</p>

                <h3>Step 1: Add the Consent Banner Script</h3>
                <p>Include the script in the end of &lt;body&gt; section of your website to enable the consent banner.
                </p>
                <pre>
                            <code>&lt;script src="https://cdn.toolz.at/banner-cmp.js" data-toolz-banner-id="&lt; Your banner ID &gt;"&gt;&lt;/script&gt;</code>
                        </pre>

                <p>This script initializes the consent banner and connects it to your configuration.</p>
                <h3>Step 2: Preview How It Looks on Your Site</h3>
                <p>Once implemented, the banner should appear on your website, allowing users to select their preferences. Here's an example of how it might look:</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner-example.png') ?>">
                </div>

                <h3>Step 3: Verify Consent Tracking (optional)</h3>
                <p>Test the consent banner to ensure that it correctly tracks user choices and applies them.
                    Check that cookies behave according to user selections and only load after consent when required.
                </p>
                <p>
                    If you use Google Tag Manager on your website,
                    just go to your website option and when you enter the preview, you will be able to see all the options and there will be a new option called <strong><em>Consent Default</em></strong> with initial personalization.
                    In case the user decides to refuse some options, it will also appear as in the example below.
                </p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/gtm-tracking.png') ?>">
                </div>


                <h3>Step 5: Update Your Privacy Policy</h3>
                <p>Ensure that your privacy policy reflects the use of the consent banner and explains how user preferences are managed.</p>

                <div class="note">
                    <p>After completing these steps, your website will comply with cookie consent regulations, providing transparency and control to users.</p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <!-- Benefits Section -->
        <section class="benefits-section">
            <h2>Benefits</h2>
            <div class="benefits-card">
                <div class="card">
                    <h3>Easy to Use</h3>
                    <p>Generate your consent mode banner with a few clicks. No coding skills required.</p>
                </div>
                <div class="card">
                    <h3>Customizable</h3>
                    <p>Customize the banner's text, colors, and layout to fit your website's design.</p>
                </div>
                <div class="card">
                    <h3>Responsive Design</h3>
                    <p>Our banners are fully responsive and look great on all devices.</p>
                </div>
                <div class="card">
                    <h3>Free</h3>
                    <p>Use our consent mode banner generator for free. No hidden charges.</p>
                </div>
            </div>

        </section>
        <div class="space"></div>
        <!-- Call to Action Section -->
        <section class="call-to-action">
            <h2>Discover Our App</h2>
            <p>Experience the simplicity and efficiency of our PWA app for creating consent mode banners.</p>
            <button class="install-app">Try the App</button>
        </section>
        <div class="space"></div>
        <!-- FAQ Section -->
        <section class="faq-section">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">What is a Consent Mode Banner?</div>
                    <div class="faq-answer">A consent mode banner is a tool that helps websites comply with GDPR regulations by informing users about cookies and allowing them to choose which cookies they want to accept.</div>
                </div>
                <div class="space"></div>

                <div class="faq-item">
                    <div class="faq-question">How can I customize my banner?</div>
                    <div class="faq-answer">You can customize the text, colors, and layout of the banner using our easy-to-use generator. Simply fill out the form and generate the code.</div>
                </div>
                <div class="space"></div>
                <div class="faq-item">
                    <div class="faq-question">Is the banner responsive?</div>
                    <div class="faq-answer">Yes, our banners are designed to be fully responsive and will look great on all devices, from desktop computers to mobile phones.</div>
                </div>
                <div class="space"></div>
                <div class="faq-item">
                    <div class="faq-question">Is this service free?</div>
                    <div class="faq-answer">Yes, our consent mode banner generator is completely free to use. There are no hidden charges or fees.</div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section class="section-default">
            <h2>Contact Us</h2>
            <p class="text-center">If you have any questions or need support, please <a href="/contact">contact us</a>.</p>
        </section>
        <section id="preview-section">
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>

    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
                const answer = item.nextElementSibling;
                if (item.classList.contains('active')) {
                    answer.style.display = 'block';
                } else {
                    answer.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
