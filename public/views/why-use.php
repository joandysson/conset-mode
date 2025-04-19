<?php
$head = [
    'title' => __('Why use'),
    'description' => __('Discover the benefits of adopting privacy-conscious practices, such as using the Google Consent Mode, to enhance user transparency and compliance with global regulations like GDPR and CCPA. Improve user trust while optimizing advertising performance and data collection.'),
    'keywords' => __('Data Privacy, Google Consent Mode, Privacy Compliance')
];
?>

<!DOCTYPE html>
<html lang="<?php echo __('html_lang') ?>">

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">
        <section id="why-use" class="why-use">
            <h1><?php echo __('Why Use Google Consent Mode V2?') ?> </h1>
            <article>
                <h2><?php echo __('Enhanced Privacy Compliance') ?></h2>
                <p>
                    <?php echo __('Google Consent Mode V2 helps businesses navigate the complex landscape of global privacy regulations like GDPR, LGPD, and CCPA. By integrating seamlessly with Consent Management Platforms (CMPs), it ensures that user consent preferences are respected, reducing legal risks and building user trust.') ?>
                </p>
                <ul>
                    <li><?php echo __('Aligns with multiple privacy laws worldwide.')?></li>
                    <li><?php echo __('Automates updates to tracking tools based on consent status.')?></li>
                    <li><?php echo __('Demonstrates commitment to user data privacy and transparency.')?></li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('Optimized Data Collection')?></h2>
                <p>
                    <?php echo __('Even when users opt out of certain cookies, Google Consent Mode V2 enables websites to collect anonymized data. This ensures businesses can maintain data-driven decision-making without compromising privacy.')?>
                </p>
                <ul>
                    <li><?php echo __('Supports essential analytics with minimal data loss.')?></li>
                    <li><?php echo __('Balances privacy with actionable business insights.')?></li>
                    <li><?php echo __('Helps optimize website performance and marketing strategies.')?></li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('Improved User Experience')?></h2>
                <p>
                    <?php echo __('By respecting user consent preferences and reducing intrusive tracking practices, Google Consent Mode V2 enhances the overall user experience. It fosters trust and loyalty, which are critical for long-term customer relationships.')?>
                </p>
                <ul>
                    <li><?php echo __('Minimizes intrusive cookie banners.')?></li>
                    <li><?php echo __('Provides a seamless and compliant browsing experience.')?></li>
                    <li><?php echo __('Strengthens brand reputation through ethical practices.')?></li>
                </ul>
            </article>
            <article>
                <h2><?php echo __('Seamless Integration')?></h2>
                <p>
                    <?php echo __('Google Consent Mode V2 integrates effortlessly with tools like Google Analytics, Google Ads, and Tag Manager. This simplifies implementation and ensures that privacy compliance does not disrupt business operations.')?>
                </p>
                <ul>
                    <li><?php echo __('Works with existing Google tools and services.')?></li>
                    <li><?php echo __('Requires minimal technical adjustments for deployment.')?></li>
                    <li><?php echo __('Adapts dynamically to changes in consent status.')?></li>
                </ul>
            </article>
        </section>

        <div class="space"></div>
        <!-- Call to Action Section -->
        <?php include 'layouts/appSection.php' ?>
        <div class="space"></div>

        <section id="cookie-banner-requirements" class="cookie-banner-necessity">
            <h1><?php echo __('Cookie Banner Requirements')?></h1>
            <div class="content">
                <p><?php echo __('A cookie banner is typically required on websites to comply with data protection laws like GDPR, LGPD, and CCPA. Its purpose is to inform users about the use of cookies and to obtain their consent for non-essential cookies.')?></p>
                <h2><?php echo __('When is a banner necessary?')?></h2>
                <p><?php echo __('A banner is required if your website uses cookies for purposes such as analytics, marketing, or personalizing user preferences. These cookies require explicit user consent.')?></p>
                <h2><?php echo __('Are banners required for necessary cookies?')?></h2>
                <p><?php echo __("In most jurisdictions, such as under GDPR, LGPD, and similar laws, banners are not required if your website only uses cookies that are strictly necessary for functionality. Examples include session cookies, authentication tokens, and cookies required for security or completing purchases. These cookies do not require user consent but must still be disclosed in the site's privacy policy.")?></p>
                <h2><?php echo __('Key Notes:')?></h2>
                <ul>
                    <li><strong><?php echo __('GDPR:')?></strong>
                    <?php echo __('Requires consent for all cookies except those strictly necessary for functionality.')?> </li>
                    <li><strong><?php echo __('LGPD:')?></strong>
                    <?php echo __('Similar to GDPR, consent is needed for non-essential cookies.')?></li>
                    <li><strong><?php echo __('CCPA:')?></strong>
                    <?php echo __('Does not mandate consent banners but requires websites to inform users about data collection and provide opt-out options for data sales.')?></li>
                </ul>
                <div class="note">
                    <p><strong><?php echo __('Summary:')?></strong>
                    <?php echo __('Use a banner when deploying non-essential cookies. For strictly necessary cookies, disclosure in your privacy policy is sufficient in most cases.')?></p>
                </div>
            </div>
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>
</body>

</html>
