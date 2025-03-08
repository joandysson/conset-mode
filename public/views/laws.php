<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => __('Data Privacy Laws'),
    'description' => __('Learn about essential data privacy laws, including GDPR, LGPD, and CCPA, designed to protect personal data and ensure companies handle information responsibly. Stay compliant, avoid penalties, and build trust with your users by aligning with data protection regulations.'),
    'keywords' => __('GDPR Compliance, Data Protection Laws, Personal Data Security')
];
?>

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">

        <section id="data-privacy-laws" class="data-privacy-laws">
            <h1> <?php echo __('Data Privacy Laws and Google Consent Mode V2') ?> </h1>
            <article>
                <h2> <?php echo __('GDPR - General Data Protection Regulation') ?></h2>
                <p>
                    <?php echo __('The GDPR is the European Union’s data protection and privacy regulation. It mandates transparency, consent, and accountability in how organizations handle personal data. Under GDPR, businesses must inform users about data collection, provide opt-in consent, and ensure secure data storage. Google Consent Mode V2 aligns with GDPR by enabling websites to respect user preferences for cookies and tracking technologies.')?>
                </p>
                <h3><?php echo __('How Google Consent Mode V2 Complies:') ?></h3>
                <ul>
                    <li><?php echo __('Allows users to opt in or out of tracking cookies (analytics and ads).') ?></li>
                    <li><?php echo __('Integrates with CMPs like Usercentrics to manage consent.') ?></li>
                    <li><?php echo __('Automatically updates Google Tag Manager settings based on user choices.') ?></li>
                </ul>
            </article>
        </section>
        <div class="space"></div>

        <section id="data-privacy-laws" class="data-privacy-laws">

            <article>
                <h2><?php echo __('LGPD - Lei Geral de Proteção de Dados')?></h2>
                <p>
                    <?php echo __('Brazil’s LGPD focuses on protecting the personal data of individuals. It is similar to the GDPR but tailored to the Brazilian context. The LGPD requires clear communication of data practices, user consent for non-essential cookies, and the ability to revoke consent. With Google Consent Mode V2, websites operating in Brazil can automate compliance by integrating consent management tools.')?>
                </p>
                <h3><?php echo __('Key Features of Google Consent Mode V2 for LGPD:') ?></h3>
                <ul>
                    <li><?php echo __('Default consent settings to "denied" for tracking cookies until user opt-in.') ?></li>
                    <li><?php echo __('Real-time updates to tracking tools based on consent status.') ?></li>
                    <li><?php echo __('Helps businesses demonstrate compliance with LGPD mandates.') ?></li>
                </ul>
            </article>
        </section>
        <div class="space"></div>

        <section id="data-privacy-laws" class="data-privacy-laws">

            <article>
                <h2><?php echo __('CCPA - California Consumer Privacy Act') ?></h2>
                <p>
                    <?php echo __('The CCPA protects the privacy rights of California residents by requiring businesses to disclose their data practices and offer opt-outs for data sales. While the CCPA does not mandate opt-in consent like GDPR, it emphasizes user control. Google Consent Mode V2 supports CCPA by ensuring ad personalization and data tracking respect opt-out preferences.') ?>
                </p>
                <h3><?php echo __('CCPA Highlights in Google Consent Mode V2:') ?></h3>
                <ul>
                    <li><?php echo __('Supports "Do Not Sell My Personal Information" requirements.') ?></li>
                    <li><?php echo __('Allows businesses to limit data sharing when users opt out.') ?></li>
                    <li><?php echo __('Adapts cookie behavior dynamically based on user preferences.') ?></li>
                </ul>
            </article>
        </section>
        <div class="space"></div>

        <section id="data-privacy-laws" class="data-privacy-laws">

            <article>
                <h2><?php echo __('Other Global Privacy Laws') ?></h2>
                <p>
                    <?php echo __('Beyond GDPR, LGPD, and CCPA, other jurisdictions have introduced privacy laws, such as Canada’s PIPEDA, Australia’s Privacy Act, and South Africa’s POPIA. While specifics differ, the principles of transparency, consent, and user rights remain universal. Google Consent Mode V2 enables a unified approach to global compliance by integrating with multiple CMPs and adapting to various legal frameworks.') ?>
                </p>
                <h3><?php echo __('Global Compliance with Google Consent Mode V2:') ?></h3>
                <ul>
                    <li><?php echo __('Provides a consistent framework for managing user consent across regions.') ?></li>
                    <li><?php echo __('Supports multiple languages and configurations for diverse audiences.') ?></li>
                    <li><?php echo __('Reduces the complexity of multi-jurisdictional compliance efforts.') ?></li>
                </ul>
            </article>
        </section>
        <div class="space"></div>
        <?php include 'layouts/appSection.php' ?>
        <div class="space"></div>
        <section id="data-privacy-laws" class="data-privacy-laws">
            <h1><?php echo __('Data Privacy Laws') ?></h1>
            <p class="text-center"><?php echo __('Overview of key regulations protecting your data') ?></p>
            <div class="law">
                <h2><?php echo __('GDPR (General Data Protection Regulation)') ?></h2>
                <p><?php echo __('A European Union regulation that ensures the protection of personal data and privacy for individuals within the EU. It mandates transparency, user consent, and the right to access, correct, and delete personal data.') ?></p>
            </div>
            <div class="law">
                <h2><?php echo __('LGPD (Lei Geral de Proteção de Dados)') ?></h2>
                <p><?php echo __("Brazil's data protection law designed to protect personal data and privacy. It gives individuals rights to access, correct, and delete their data, and requires businesses to obtain clear consent for data processing.") ?></p>
            </div>
            <div class="law">
                <h2><?php echo __('CCPA (California Consumer Privacy Act)') ?></h2>
                <p><?php echo __('A U.S. regulation granting California residents rights to know how their data is used, request deletion, and opt-out of data sales. It emphasizes transparency and user control over personal information.') ?></p>
            </div>
            <div class="law">
                <h2><?php echo __('Other Laws') ?></h2>
                <p><?php echo __("Similar regulations exist worldwide, such as Canada's PIPEDA, Australia's Privacy Act, and Japan's APPI. These laws aim to protect user privacy, ensure data security, and hold businesses accountable for data practices.") ?></p>
            </div>
            <div class="note">
                <p>
                    <strong><?php echo __('Note:') ?></strong>
                    <?php echo __('These laws vary by region but share common goals of protecting individual privacy, ensuring transparency, and granting users control over their data.') ?>
                </p>
            </div>
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>
</body>

</html>
