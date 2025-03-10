<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => __('Cookeis'),
    'description' => __('Understand how cookies function to enhance website user experience while ensuring compliance with privacy laws like GDPR. Implement proper cookie consent management and give users control over their data sharing preferences.'),
    'keywords' => __('Cookie Consent Management, GDPR Cookies, Online Privacy Compliance')
];
?>

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">
        <section id="cookies-explained" class="section-default">
            <h1><?php echo __('Cookies Explained') ?></h1>
            <article>
                <h2><?php echo __('What Are Cookies?') ?></h2>
                <p>
                    <?php echo __("Cookies are small text files stored on a user's device by a website. They contain data about user activity and preferences, enabling websites to provide personalized experiences and retain essential information, such as login credentials or shopping cart items.") ?>
                </p>
                <ul>
                    <li><?php echo __("Stored locally on the user's browser or device.") ?></li>
                    <li><?php echo __('Facilitate seamless navigation and user convenience.') ?></li>
                    <li><?php echo __('Widely used across the web for functionality and analytics.') ?></li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('Types of Cookies') ?></h2>
                <p>
                    <?php echo __('Not all cookies are the same. Different types of cookies serve distinct purposes, ranging from essential website operations to personalized advertising.') ?>
                </p>
                <ul>
                    <li>
                        <strong><?php echo __('Essential Cookies:') ?></strong>
                        <?php echo __('These are necessary for the core functionalities of a website, such as secure logins or saving items in a shopping cart.') ?>
                    </li>
                    <li>
                        <strong><?php echo __('Performance Cookies:') ?></strong>
                        <?php echo __('Collect anonymized data about how users interact with a website, helping improve site performance and usability.') ?>
                    </li>
                    <li>
                        <strong><?php echo __('Functional Cookies:') ?></strong>
                        <?php echo __('Store user preferences, like language settings or region-specific details, to enhance user experience.') ?>
                    </li>
                    <li>
                        <strong><?php echo __('Advertising Cookies:') ?></strong>
                        <?php echo __('Track user activity to deliver personalized advertisements based on browsing habits.') ?>
                    </li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('Why Are Cookies Important?') ?></h2>
                <p>
                    <?php echo __('Cookies enable websites to function effectively while enhancing the user experience. They also support businesses in understanding user behavior, optimizing performance, and delivering targeted services.') ?>
                </p>
                <ul>
                    <li><?php echo __('Enable seamless login and personalized experiences.') ?></li>
                    <li><?php echo __('Provide critical insights into user activity and preferences.') ?></li>
                    <li><?php echo __('Support marketing and advertising strategies.') ?></li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('Privacy Concerns') ?></h2>
                <p>
                    <?php echo __('While cookies are essential, they can raise privacy concerns if misused. Tracking cookies, in particular, have prompted global data protection laws like GDPR, LGPD, and CCPA, ensuring users have control over their data.') ?>
                </p>
                <ul>
                    <li><?php echo __('Some cookies collect sensitive personal data.') ?></li>
                    <li><?php echo __('Consent is required for non-essential cookies in many jurisdictions.') ?></li>
                    <li><?php echo __('Transparency and control are critical for compliance and trust.') ?></li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('How Google Consent Mode Manages Cookies') ?></h2>
                <p>
                    <?php echo __('Google Consent Mode V2 provides a robust framework for managing cookies in compliance with global privacy laws. By integrating with Consent Management Platforms, it dynamically adjusts cookie behavior based on user consent.') ?>
                </p>
                <ul>
                    <li><?php echo __('Enables anonymized data collection when consent is not granted.') ?></li>
                    <li><?php echo __('Supports user preference updates in real time.') ?></li>
                    <li><?php echo __('Ensures compliance with laws like GDPR, LGPD, and others.') ?></li>
                </ul>
            </article>
        </section>
        <div class="space"></div>
        <!-- Call to Action Section -->
        <?php include 'layouts/appSection.php' ?>
        <div class="space"></div>
        <section id="data-categories" class="data-categories">
            <h1><?php echo __('Data Categories') ?></h1>
            <p class="text-center"><?php echo __('Understanding how we use your data') ?></p>
            <div class="category">
                <h2><?php echo __('Necessary') ?></h2>
                <p><strong><?php echo __('Essential for website functionality:') ?></strong>
                <?php echo __('This category includes data that is strictly necessary for the website to function properly.') ?>
                </p>
                <ul>
                    <li><?php echo __('Examples: Session cookies, authentication tokens, and data required to complete a purchase.') ?></li>
                    <li><strong><?php echo __('User consent:') ?></strong>
                    <?php echo __("Typically, users don't have the option to opt-out of necessary data processing.") ?></li>
                </ul>
            </div>
            <div class="category">
                <h2><?php echo __('Marketing') ?></h2>
                <p><strong><?php echo __('Used for targeted advertising:') ?></strong>
                <?php echo __('This category includes data used to personalize ads and track user behavior for marketing purposes.') ?></p>
                <ul>
                    <li><?php echo __('Examples: Cookies that track browsing history, demographic information, and interests.') ?></li>
                    <li><strong><?php echo __('User consent:') ?></strong>
                    <?php echo __('Users can usually opt-out of marketing data processing.') ?></li>
                </ul>
            </div>
            <div class="category">
                <h2><?php echo __('Analytics') ?></h2>
                <p><strong><?php echo __('Used for website performance and user behavior:') ?></strong>
                <?php echo __("This category includes data used to analyze website traffic, user engagement, and other metrics to improve the website's performance.") ?></p>
                <ul>
                    <li><?php echo __('Examples: Cookies that track page views, time spent on site, and click-through rates.') ?></li>
                    <li><strong><?php echo __('User consent:') ?></strong>
                    <?php echo __('Users can usually opt-out of analytics data processing.') ?></li>
                </ul>
            </div>
            <div class="category">
                <h2><?php echo __('Preferences') ?></h2>
                <p><strong><?php echo __('Used for personalized user experience:') ?></strong>
                <?php echo __("This category includes data used to customize the website's appearance or content based on user preferences.") ?></p>
                <ul>
                    <li><?php echo __('Examples: Cookies that remember language preferences, theme choices, or previously viewed products.') ?></li>
                    <li><strong><?php echo __('User consent:') ?></strong> <?php echo __('Users can usually opt-out of preference data processing.') ?></li>
                </ul>
            </div>
            <div class="note">
                <p><strong><?php echo __('Summary:') ?></strong> <?php echo __('Necessary data is essential for the website to function. Marketing data is used to target ads and track user behavior. Analytics data is used to analyze website performance. Preferences data is used to personalize the user experience. Users typically have more control over marketing, analytics, and preference data processing.') ?></p>
            </div>
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>
</body>

</html>
