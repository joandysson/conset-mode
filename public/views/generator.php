<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => 'Generator',
    'description' => 'Create and customize the Consent Mode to best suit your website, adjust the layout, colors, position, all for free',
    'keywords' => 'GDPR, LGPD, CCPA, custom consent banner, free consent banner tool, website compliance, HTML CSS JavaScript snippets, privacy regulations'
];
?>

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">
        <section id="configuration" class="section-default">
            <h1>Generator</h1>
            <!-- Your configuration form and code generation UI goes here -->
            <div id="customization-ui">
                <h2>Customize your Consent Banner (<a href="#banner-configuration-options">How to Configure</a>)</h2>
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
                    <h2>This is your banner ID</h2>
                    <div class="code-section">
                        <pre><code id="banner-id"></code></pre>
                        <button onclick="copyToClipboard('banner-id')">Copy</button>
                    </div>


                    <h2>Generated CDN Code (Place inside &lt;body&gt; tag)</h2>
                    <div class="code-section">
                        <pre><code id="generated-link"></code></pre>
                        <button onclick="copyToClipboard('generated-link')">Copy</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="banner-configuration-options" class="banner-configuration-guide">
            <h1>Banner Configuration Options</h1>
            <div class="content">
                <p>Customize your consent banner directly from our site to meet your website's needs. Below are the configuration options available and how they affect the banner's behavior:</p>
                <p>These are all the configuration options you can make on your banner, below we will explain each section.</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/preferences.png') ?>">
                </div>

                <h2>Once you start editing, a pop-up like this will appear with the name <em> "Close Preview"</em> </h2>
                <p>From this point on you can see all the settings you are making</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner.png') ?>">
                </div>

                <h2>By clicking on settings you can also see the cookie settings</h2>
                <p>These are the options that a user can choose.
                    <a href="#data-categories">learning more here.</a>
                </p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner-preference.png') ?>">
                </div>

                <hr>

                <h2>1. Configure title and description of your banner</h2>
                <p>This information appears for the user to read and understand what it is.</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/title-and-description.png') ?>">
                </div>
                <!-- <h2>1. Define Cookie Categories</h2>
                    <p>Configure which cookie categories (e.g., Necessary, Marketing, Analytics, Preferences) appear on the banner and set their default states.</p>
                    <div class="example-image">
                        <p><em>Insert an image here showing the interface for managing cookie categories.</em></p>
                    </div> -->

                <h2>2. Design the Banner's Appearance</h2>
                <p>Customize the banner's style, including colors, borders, and placement on the page (top, bottom, or modal).</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/aparence.png') ?>">
                </div>

                <h2>4. Choose buttons options</h2>
                <p>Enable all buttons or not and customize button name.</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/button-options.png') ?>">
                </div>

                <h2>5. Adding terms and policy</h2>
                <p>You can add your terms of service and privacy policy to your banner</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/terms-and-politics.png') ?>">
                </div>

                <h2>6. Save</h2>
                <p>You just need to click on <strong><em>Generate Banner</em></strong> button and a code will be displayed below
                    <br>
                    see how:
                    <br>
                    <a href="#how-to-configure-consent-mode">
                        Configure manually
                    </a>
                    <br>
                    <a href="#how-to-configure-consent-mode-gtm">
                        Configure with Google tag manager
                    </a>
                </p>

                <div class="note">
                    <p>Using these configuration options, you can create a consent banner tailored to your website's branding and legal compliance needs.</p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="how-to-configure-consent-mode" class="consent-mode-tutorial">
            <h1>Configure Manually</h1>
            <div class="content">
                <p>Follow this step-by-step tutorial to implement consent mode on your website using the provided script. This ensures compliance with data protection laws while maintaining control over cookie behavior.</p>

                <h2>Step 1: Add the Consent Banner Script</h2>
                <p>Include the script in the end of &lt;body&gt; section of your website to enable the consent banner.
                </p>
                <pre>
                            <code>&lt;script src="https://cdn.toolz.at/banner-cmp.js" data-toolz-banner-id="&lt; Your banner ID &gt;"&gt;&lt;/script&gt;</code>
                        </pre>

                <p>This script initializes the consent banner and connects it to your configuration.</p>
                <h2>Step 2: Preview How It Looks on Your Site</h2>
                <p>Once implemented, the banner should appear on your website, allowing users to select their preferences. Here's an example of how it might look:</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner-example.png') ?>">
                </div>

                <h2>Step 3: Verify Consent Tracking (optional)</h2>
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

                <h2>Step 5: Update Your Privacy Policy</h2>
                <p>Ensure that your privacy policy reflects the use of the consent banner and explains how user preferences are managed.</p>

                <div class="note">
                    <p>After completing these steps, your website will comply with cookie consent regulations, providing transparency and control to users.</p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="how-to-configure-consent-mode-gtm" class="consent-mode-tutorial">
            <h1>Configure with Google Tag Manager</h1>
            <div class="content">
                <p>Follow this step-by-step tutorial to implement consent mode on your website using the provided GTM tutorial. This ensures compliance with data protection laws while maintaining control over cookie behavior.</p>

                <h2>Step 1: Add tag in your GTM account</h2>
                <p>As a first step, you need to add a new tag in your GTM account. To do this, follow the steps below:</p>
                <p>
                    1. Go to your GTM account and click on the <strong><em>Tags</em></strong> option.
                    <br>
                    2. Click on the <strong><em>New</em></strong> button to create a new tag.
                    <br>
                    3. Select the <strong><em>Discover more tag types in the Community Template Gallery</em></strong> option.
                    <br>
                    4. Search for the <strong><em>Consent Mode (Free) - Toolz</em></strong> tag and click on it.
                    <br>
                    5. Click on the <strong><em>Add to workspace</em></strong> button.
                    <br>
                    6. Confirm the tag creation by clicking on the <strong><em>Add</em></strong> button.
                </p>

                <p>You are going to see this image below</p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/gtm-configure.png') ?>">
                </div>

                <h2>Step 2: Add your banner ID</h2>
                <p>
                    Get your banner ID generated in <strong><a href="#configuration"> Banner Configuration</a></strong>
                    and put it in the <strong><em>Banner ID</em></strong> field.
                </p>
                <h2>Step 3: Add default settings</h2>
                <p>
                    You can also add the default cookie settings for your banner. <br>
                    1. Click on <strong><em>Add Row</em></strong> option. <br>
                    2. Select between <strong><em>Necessary</em></strong>, <strong><em>Marketing</em></strong>, <strong><em>Analytics</em></strong> and <strong><em>Preferences</em></strong> cookies.<br>
                    3. Select <strong><em>Granted</em></strong> or <strong><em>Denied</em></strong> the cookie option to start as default.

                </p>
                <h2>Step 4: Save and Publish</h2>
                <p>
                    After completing the configuration, click on the <strong><em>Save</em></strong> button and then on the <strong><em>Publish</em></strong> button to apply the changes to your website.
                </p>
                <h2>Step 3: Verify Consent Tracking</h2>
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

                <div class="note">
                    <p>After completing these steps, your website will comply with cookie consent regulations, providing transparency and control to users. Now your banner are going to appear in your website</p>
                </div>
            </div>
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
