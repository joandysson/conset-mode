<?php
$head = [
    'title' => __('About us'),
    'description' => __('Discover more about our mission to provide a free, customizable consent mode banner generator. Learn about our team and our commitment to compliance and user experience.'),
    'keywords' => __('about us, consent banner generator, our mission, compliance, user experience')
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
        <section class="section-default">
            <h1><?php echo __('Welcome to Consent Mode Banner') ?> </h1>
            <p><?php echo __('The home of the Free Consent Mode Banner Generator. Our mission is to provide web developers, site owners, and digital marketers with a simple, effective, and customizable solution for managing cookie consent on their websites.') ?></p>
        </section>
        <div class="space"></div>
        <section class="section-default">
            <h1><?php echo __('Our Story') ?></h1>
            <p><?php echo __("In today's digital landscape, privacy and user consent are more important than ever. We recognized the need for an easy-to-use tool that would help website owners comply with regulations like GDPR and CCPA without compromising on user experience or aesthetics. That's why we created our Free Consent Mode Banner Generator.") ?></p>
        </section>
        <div class="space"></div>
        <section class="section-default">
            <h1><?php echo __('What We Offer') ?></h1>
            <ul>
                <li><?php echo __('Our tool allows you to create fully customizable consent banners with minimal effort.') ?></li>
                <li><?php echo __("You can choose from various placements, styles, and configurations to match your website's design and functionality.") ?></li>
                <li><?php echo __('Whether you need a simple accept button or a more detailed settings option, our generator has you covered.') ?></li>
            </ul>
        </section>
        <div class="space"></div>
        <section class="section-default">
            <h1><?php echo __('Why Choose Us?') ?></h1>
            <ul>
                <li><strong><?php echo __('User-Friendly Interface:') ?></strong>
                <?php echo __('Our intuitive design ensures that you can create and implement a consent banner in minutes, even with no coding experience.') ?></li>
                <li><strong><?php echo __('Customization:') ?></strong>
                <?php echo __('Tailor your banner to fit the look and feel of your website with customizable colors, text, and buttons.') ?>
                </li>
                <li><strong><?php echo __('Compliance:') ?></strong>
                <?php echo __('Stay compliant with the latest privacy laws and regulations by using our up-to-date consent solutions.') ?>
                </li>
                <li><strong><?php echo __('Support:') ?></strong>
                <?php echo __("We're here to assist you with any questions or issues you might encounter while using our tool.") ?></li>
            </ul>
        </section>
        <div class="space"></div>
        <section class="section-default">
            <h1><?php echo __('Our Commitment') ?></h1>
            <p><?php echo __('At Consent Mode Banner, we are committed to helping you navigate the complexities of digital privacy with ease. Our free tool is designed to save you time and effort, allowing you to focus on what really matters – your website and your audience.') ?></p>
            <p><?php echo __('Thank you for choosing Consent Mode Banner. We look forward to helping you create a better and more compliant online experience.') ?></p>
            <p><?php echo __('For more information or support, feel free to') ?> <a href="/contact"><?php echo __('Contact Us') ?></a>.</p>
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>

</body>

</html>
