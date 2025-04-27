<?php
$head = [
    'title' => __('Generator'),
    'description' => __('Create and customize the Consent Mode to best suit your website, adjust the layout, colors, position, all for free'),
    'keywords' => __('GDPR, LGPD, CCPA, custom consent banner, free consent banner tool, website compliance, HTML CSS JavaScript snippets, privacy regulations')
];
?>

<!DOCTYPE html>
<html lang="<?php echo __('html_lang') ?>">

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body banner-close-preview="<?php echo __('Close Preview') ?>" banner-privacy-policy="<?php echo __('Privacy Policy') ?>" banner-terms-of-use="<?php echo __('Terms of Use') ?>" banner-preferences-title='{"necessary": "<?php echo __('Necessary') ?>", "analytics": "<?php echo __('Analytics') ?>", "preferences": "<?php echo __('Preferences') ?>", "marketing": "<?php echo __('Marketing') ?>"}' banner-preferences-description='{"necessary": "<?php echo __('Enable essential cookies for the website to function properly.') ?>", "analytics": "<?php echo __('Allow anonymous tracking of website usage to improve user experience.') ?>", "preferences": "<?php echo __('Remember user preferences such as language and region settings.') ?>", "marketing": "<?php echo __('Enable personalized advertisements based on user interests and behavior.') ?>"}' >

    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">
        <div class="alert alert-warning">
            <?php echo __("If don't how configure your banner yet,") ?>
            <strong><a href="#how-to-configure-consent-mode"><?php echo __('click here') ?></a></strong>
            <!-- Customize your Consent Banner (<a href="#banner-configuration-options">How to Configure</a>) -->
        </div>
        <section id="configuration" class="section-default">
            <h1> <?php echo __('Configure Banner') ?> </h1>
            <!-- Your configuration form and code generation UI goes here -->
            <div id="customization-ui">
                <form id="customization-form">
                    <label for="banner-title"> <?php echo __('Banner Title:') ?></label>
                    <input type="text" id="banner-title" value="<?php echo __('Cookie settings'); ?>" placeholder="<?php echo __('Cookie settings'); ?>">

                    <label for="banner-text"><?php echo __('Banner Text:') ?></label>
                    <textarea id="banner-text" name="banner-text"><?php echo __('We use cookies to provide you with the best possible experience...') ?></textarea>

                    <label for="terms"><?php echo __('Terms of use (Link)') ?></label>
                    <input type="url" id="terms" name="terms" value="" placeholder="https://toolz.at/terms">

                    <label for="politics-privacy"><?php echo __('Politics Privacy:') ?></label>
                    <input type="url" id="politics-privacy" name="politics-privacy" value="" placeholder="https://toolz.at/politics-privacy">

                    <label for="button-options"><?php echo __('Button Options:') ?></label>
                    <select id="button-options" name="button-options">
                        <option value="all"><?php echo __('Show All Buttons') ?></option>
                        <option value="accept-only"><?php echo __('Accept Only Button') ?></option>
                    </select>

                    <div class="input-group">
                        <div class="btn-group-child">
                            <label for="input-text-success"><?php echo __('Accept Button Text:') ?></label>
                            <input id="input-text-success" name="input-text-success" type="text" value="<?php echo __('Accept'); ?>" placeholder="<?php echo __('Accept'); ?>">
                        </div>

                        <div class="btn-group-child">
                            <label for="input-text-reject"><?php echo __('Reject Button Text:') ?></label>
                            <input id="input-text-reject" name="input-text-reject" type="text" value="<?php echo __('Reject'); ?>" placeholder="<?php echo __('Reject'); ?>">
                        </div>

                        <div class="btn-group-child">
                            <label for="input-text-settings"><?php echo __('Settings Button Text:') ?></label>
                            <input id="input-text-settings" name="input-text-settings" type="text" value="<?php echo __('Settings'); ?>" placeholder="<?php echo __('Settings'); ?>">
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="color-group-child">
                            <label for="input-success"><?php echo __('Accept Button Color:') ?></label>
                            <input type="color" id="input-success" name="input-success" value="#007bff">
                        </div>

                        <div class="color-group-child">
                            <label for="input-reject"><?php echo __('Reject Button Color:') ?></label>
                            <input type="color" id="input-reject" name="input-reject" value="#007bff">
                        </div>

                        <div class="color-group-child">
                            <label for="input-settings"><?php echo __('Settings Button Color:') ?></label>
                            <input type="color" id="input-settings" name="input-settings" value="#007bff">
                        </div>

                        <div class="color-group-child">
                            <label for="input-toggle"><?php echo __('Toggle:') ?></label>
                            <input type="color" id="input-toggle" name="input-toggle" value="#007bff">
                        </div>
                    </div>

                    <label for="placement"><?php echo __('Banner Placement:') ?></label>
                    <select id="placement" name="placement">
                        <option value="bottom"><?php echo __('Bottom') ?></option>
                        <option value="top"><?php echo __('Top') ?></option>
                        <option value="bottom-left"><?php echo __('Bottom Left') ?></option>
                        <option value="bottom-right"><?php echo __('Bottom Right') ?></option>
                        <option value="bottom-center"><?php echo __('Bottom Center') ?></option>
                    </select>

                    <label for="button-radius"><?php echo __('Button Radius (0-10px):') ?></label>
                    <input type="number" id="button-radius" name="button-radius" min="0" max="10" value="0">

                    <label for="border-radius"><?php echo __('Border Radius (0-10px):') ?></label>
                    <input type="number" id="border-radius" name="border-radius" min="0" max="10" value="0">

                    <!-- <button type="button" id="generate-code">Generate Code</button>
                        <button type="button" id="example-code">Download Code</button> -->
                    <button type="button" id="cdn-code"><?php echo __('Generate Banner') ?></button>
                </form>

                <div id="result" class="result">
                    <h2><?php echo __('This is your banner ID') ?></h2>
                    <div class="code-section">
                        <pre><code id="banner-id"></code></pre>
                        <button onclick="copyToClipboard('banner-id')"><?php echo __('Copy') ?></button>
                    </div>

                    <br>
                    <hr>

                    <h2><?php echo __('Generated CDN Code (Place inside &lt;body&gt; tag)') ?></h2>
                    <div class="code-section">
                        <pre><code id="generated-link"></code></pre>
                        <button onclick="copyToClipboard('generated-link')"><?php echo __('Copy') ?></button>
                    </div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="banner-configuration-options" class="banner-configuration-guide">
            <h1><?php echo __('Banner Configuration Options')?></h1>
            <div class="content">
                <p><?php echo __("Customize your consent banner directly from our site to meet your website's needs. Below are the configuration options available and how they affect the banner's behavior:")?></p>
                <p><?php echo __('These are all the configuration options you can make on your banner, below we will explain each section.')?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/preferences.png') ?>">
                </div>

                <h2><?php echo __('Once you start editing, a pop-up like this will appear with the name') ?> <em> <?php echo __('Close Preview') ?></em> </h2>
                <p><?php echo __('From this point on you can see all the settings you are making') ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner.png') ?>">
                </div>

                <h2><?php echo __('By clicking on settings you can also see the cookie settings') ?></h2>
                <p><?php echo __('These are the options that a user can choose.') ?>
                    <a href="#data-categories"><?php echo __('learning more here.') ?></a>
                </p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner-preference.png') ?>">
                </div>

                <hr>

                <h2><?php echo __('1. Configure title and description of your banner') ?></h2>
                <p><?php echo __('This information appears for the user to read and understand what it is.') ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/title-and-description.png') ?>">
                </div>
                <!-- <h2>1. Define Cookie Categories</h2>
                    <p>Configure which cookie categories (e.g., Necessary, Marketing, Analytics, Preferences) appear on the banner and set their default states.</p>
                    <div class="example-image">
                        <p><em>Insert an image here showing the interface for managing cookie categories.</em></p>
                    </div> -->

                <h2><?php echo __("2. Design the Banner's Appearance") ?></h2>
                <p><?php echo __("Customize the banner's style, including colors, borders, and placement on the page (top, bottom, or modal).") ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/aparence.png') ?>">
                </div>

                <h2><?php echo __('4. Choose buttons options') ?></h2>
                <p><?php echo __('Enable all buttons or not and customize button name.') ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/button-options.png') ?>">
                </div>

                <h2><?php echo __('5. Adding terms and policy') ?></h2>
                <p><?php echo __('You can add your terms of service and privacy policy to your banner') ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/terms-and-politics.png') ?>">
                </div>

                <h2><?php echo __('6. Save') ?></h2>
                <p><?php echo __('You just need to click on') ?> <strong><em><?php echo __('Generate Banner') ?></em></strong> <?php echo __('button and a code will be displayed below') ?>
                    <br>
                    <?php echo __('see how:') ?>
                    <br>
                    <a href="#how-to-configure-consent-mode">
                        <?php echo __('Configure manually') ?>
                    </a>
                    <br>
                    <a href="#how-to-configure-consent-mode-gtm">
                        <?php echo __('Configure with Google tag manager') ?>
                    </a>
                </p>

                <div class="note">
                    <p>
                        <?php echo __("Using these configuration options, you can create a consent banner tailored to your website's branding and legal compliance needs.") ?>
                    </p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="how-to-configure-consent-mode" class="consent-mode-tutorial">
            <h1><?php echo __('Configure Manually') ?></h1>
            <div class="content">
                <p>
                    <?php echo __('Follow this step-by-step tutorial to implement consent mode on your website using the provided script. This ensures compliance with data protection laws while maintaining control over cookie behavior.') ?>
                </p>

                <h2><?php echo __('Step 1: Add the Consent Banner Script') ?></h2>

                <p>
                    <?php echo __('Include the script in the end of &lt;body&gt; section of your website to enable the consent banner.') ?>
                </p>
                <pre><code>&lt;script src="https://cdn.toolz.at/banner-cmp.js" data-toolz-banner-id="&lt; <strong><?php echo __('Your banner ID')?></strong> &gt;"&gt;&lt;/script&gt;</code></pre>

                <p><?php echo __('This script initializes the consent banner and connects it to your configuration.') ?></p>
                <h2><?php echo __('Step 2: Preview How It Looks on Your Site') ?></h2>
                <p><?php echo __("Once implemented, the banner should appear on your website, allowing users to select their preferences. Here's an example of how it might look:") ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/banner-example.png') ?>">
                </div>

                <h2><?php echo __('Step 3: Verify Consent Tracking (optional)') ?></h2>
                <p><?php echo __('Test the consent banner to ensure that it correctly tracks user choices and applies them. Check that cookies behave according to user selections and only load after consent when required.') ?>
                </p>
                <p>
                    <?php echo __('If you use Google Tag Manager on your website, just go to your website option and when you enter the preview, you will be able to see all the options and there will be a new option called') ?>
                    <strong><em> <?php echo __('Consent Default') ?> </em></strong>
                    <?php echo __('with initial personalization. In case the user decides to refuse some options, it will also appear as in the example below.') ?>
                </p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/gtm-tracking.png') ?>">
                </div>

                <h2><?php echo __('Step 5: Update Your Privacy Policy') ?></h2>
                <p><?php echo __('Ensure that your privacy policy reflects the use of the consent banner and explains how user preferences are managed.') ?></p>

                <div class="note">
                    <p><?php echo __('After completing these steps, your website will comply with cookie consent regulations, providing transparency and control to users.') ?></p>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section id="how-to-configure-consent-mode-gtm" class="consent-mode-tutorial">
            <h1><?php echo __('Configure with Google Tag Manager') ?></h1>
            <div class="content">
                <p><?php echo __('Follow this step-by-step tutorial to implement consent mode on your website using the provided GTM tutorial. This ensures compliance with data protection laws while maintaining control over cookie behavior.') ?></p>

                <h2><?php echo __('Step 1: Add tag in your GTM account') ?></h2>
                <p><?php echo __('As a first step, you need to add a new tag in your GTM account. To do this, follow the steps below:') ?></p>
                <p>
                    <?php echo __('1. Go to your GTM account and click on the'); ?>
                     <strong><em><?php echo __('Tags'); ?></em></strong> <?php echo __('option.'); ?>
                    <br>
                    <?php echo __('2. Click on the'); ?> <strong><em><?php echo __('New'); ?></em></strong> <?php echo __('button to create a new tag.'); ?>
                    <br>
                    <?php echo __('3. Select the'); ?> <strong><em><?php echo __('Discover more tag types in the Community Template Gallery'); ?></em></strong> <?php echo __('option.'); ?>
                    <br>
                    <?php echo __('4. Search for the'); ?> <strong><em><?php echo __('Consent Mode (Free) - Toolz'); ?></em></strong> <?php echo __('tag and click on it.'); ?>
                    <br>
                    <?php echo __('5. Click on the'); ?> <strong><em><?php echo __('Add to workspace'); ?></em></strong> <?php echo __('button.'); ?>
                    <br>
                    <?php echo __('6. Confirm the tag creation by clicking on the'); ?> <strong><em><?php echo __('Add'); ?></em></strong> <?php echo __('button.'); ?>
                </p>

                <p><?php echo __('You are going to see this image below') ?></p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/gtm-configure.png') ?>">
                </div>

                <h2><?php echo __('Step 2: Add your banner ID') ?></h2>
                <p>
                    <?php echo __('Get your banner ID generated in') ?>
                    <strong><a href="#configuration"><?php echo __('Banner Configuration') ?></a></strong>
                    <?php echo __('and put it in the') ?> <strong><em><?php echo __('Banner ID') ?></em></strong> <?php echo __('field.') ?>
                </p>
                <h2><?php echo __('Step 3: Add default settings')?></h2>
                <p>
                    <?php echo __('You can also add the default cookie settings for your banner.') ?> <br>
                    <?php echo __('1. Click on') ?>
                    <strong><em><?php echo __('Add Row') ?></em></strong> <?php echo __('option.') ?> <br>
                    <?php echo __('2. Select between') ?> <strong><em><?php echo __('Necessary') ?></em></strong>,
                    <strong><em><?php echo __('Marketing') ?></em></strong>,
                    <strong><em><?php echo __('Analytics') ?></em></strong> <?php echo __('and') ?>
                    <strong><em><?php echo __('Preferences') ?></em>
                    </strong> <?php echo __('cookies.') ?><br>
                    <?php echo __('3. Select') ?> <strong><em><?php echo __('Granted') ?></em></strong> <?php echo __('or') ?>
                    <strong><em><?php echo __('Denied') ?></em></strong> <?php echo __('the cookie option to start as default.') ?>

                </p>
                <h2><?php echo __('Step 4: Save and Publish') ?></h2>
                <p>
                    <?php echo __('After completing the configuration, click on the') ?>
                    <strong><em><?php echo __('Save') ?></em></strong>
                    <?php echo __('button and then on the') ?>
                    <strong><em><?php echo __('Publish') ?></em></strong>
                    <?php echo __('button to apply the changes to your website.') ?>
                </p>
                <h2><?php echo __('Step 3: Verify Consent Tracking') ?></h2>
                <p>
                    <?php echo __('Test the consent banner to ensure that it correctly tracks user choices and applies them. Check that cookies behave according to user selections and only load after consent when required.') ?>
                </p>
                <p>
                    <?php echo __('If you use Google Tag Manager on your website, just go to your website option and when you enter the preview, you will be able to see all the options and there will be a new option called') ?>
                    <strong><em><?php echo __('Consent Default') ?></em></strong>
                    <?php echo __('with initial personalization. In case the user decides to refuse some options, it will also appear as in the example below.') ?>
                </p>
                <div class="example-image">
                    <img class="border-1px" src="<?php echo asset('images/png/gtm-tracking.png') ?>">
                </div>

                <div class="note">
                    <p>
                    <?php echo __('After completing these steps, your website will comply with cookie consent regulations, providing transparency and control to users. Now your banner are going to appear in your website') ?></p>
                </div>
            </div>
        </section>

        <section id="preview-section">
        </section>

        <div class="space"></div>

        <script id="preview-banner-html" type="text/template">
            <?php include dirname(__DIR__) . '/assets/templates/default/html' ?>
        </script>
        <script id="preview-banner-css" type="text/template">
            <?php include dirname(__DIR__) . '/assets/templates/default/css' ?>
        </script>
        <script id="preview-banner-js" type="text/template">
            <?php include dirname(__DIR__) . '/assets/templates/default/js' ?>
        </script>
    </main>
    <?php include 'layouts/footer.php' ?>
    <script src="<?php echo asset('js/libs/handlebars.min.js'); ?>"></script>

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
