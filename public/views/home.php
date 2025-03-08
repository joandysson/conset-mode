<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' =>  __('Home'),
    'description' => __('Cookie Notice Generator is an online web tool or app that creates highly customizable cookie consent banners for websites. You can modify the banner text, colors, layout position, and more.'),
    'keywords' => __('GDPR, LGPD, CCPA, consent mode banner, custom consent banner, free consent banner tool, website compliance, privacy regulations')
];
?>

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">
        <section class="section-default section-init">
            <p class="text-center">
                <?php
                echo __('Create a free consent mode banner for your website with our easy-to-use tool. Ensure compliance with GDPR, LGPD, and CCPA while providing a seamless user experience.')
                ?>
            </p>
            <div class="d-flex justify-content-center mt-40">
                <a class="btn" href="/generator"><?php echo __('Generate Banner') ?> </a>
            </div>
        </section>
        <div class="space"></div>
        <!-- How It Works Section -->
        <section class="how-it-works-section">
            <h1 id="how-it-works">
                <?php echo __('Steps to Implement your Consent Mode V2') ?>
            </h1>
            <div class="steps-grid">
                <div class="step">
                    <div class="step-icon">1️⃣</div>
                    <div class="step-content">
                        <h2> <?php echo __('Select Preferences') ?> </h2>
                        <p> <?php echo __('Choose your preferred banner placement, title, and button options.') ?> </p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">2️⃣</div>
                    <div class="step-content">
                        <h2> <?php echo __('Customize Appearance') ?> </h2>
                        <p><?php echo __("Adjust the banner's appearance by setting the border radius, colors, and text.") ?> </p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">3️⃣</div>
                    <div class="step-content">
                        <h2><?php echo __('Generate Code') ?> </h2>
                        <p><?php echo __('Click the generate button to receive your personalized banner code.') ?></p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">4️⃣</div>
                    <div class="step-content">
                        <h2><?php echo __('Implement') ?> </h2>
                        <p><?php echo __("Copy the generated code and insert it into your website's HTML.") ?> </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section class="section-banner-info">
            <div class="box">
                <div>🔘</div>
                <h2><?php echo __('Light-weight Script') ?> </h2>
                <p><?php echo __('A lightweight script which does not affect website speed') ?></p>
            </div>
            <div class="box">
                <div>🔘</div>
                <h2><?php echo __('Easy to integrate') ?></h2>
                <p><?php echo __('In just a few clicks, the consent banner will be available on your website') ?></p>
            </div>
            <div class="box">
                <div>🔘</div>
                <h2><?php echo __('Browser Support') ?></h2>
                <p><?php echo __('Supports all the major web browsers and devices') ?> </p>
            </div>
        </section>
        <div class="space"></div>
        <section class="cookie-banner-section">
            <div class="description">
                <h2><?php echo __('What Is Cookie Banner Generator') ?> </h2>
                <p>
                    <?php echo __('Develop trust with your site clients while adhering to current data protection regulations and avoiding potential fines.') ?>
                </p>
                <p>
                    <?php echo __('Cookie Notice Generator is an online web tool or app that creates highly customizable cookie consent banners for websites. You can modify the banner text, colors, layout position, and more.') ?>
                </p>
            </div>
            <div class="features">

                <h3><?php echo __('Features of Cookie Banner Generator') ?></h3>
                <ul>
                    <li><?php echo __('Free of Cost') ?></li>
                    <li><?php echo __('Highly customizable') ?></li>
                    <li><?php echo __('Millions of colors supported') ?></li>
                    <li><?php echo __('Various layouts to choose from') ?></li>
                    <li><?php echo __('Can be configured through the interface') ?></li>
                    <li><?php echo __('Easy integration with all types of websites including WordPress sites') ?></li>
                    <li><?php echo __('Available with Google Tag Manager') ?></li>
                    <li><?php echo __('Hassle-free download') ?></li>
                </ul>
            </div>
        </section>
        <div class="space"></div>
        <section class="d-flex section-call-generation">
            <div>
                <p class="text-center"><?php echo __('Generate Free Consent Banner') ?></p>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn" href="/generator"><?php echo __('Access') ?></a>
            </div>
        </section>
        <div class="space"></div>
        <!-- Benefits Section -->
        <section class="benefits-section">
            <h1><?php echo __('Benefits') ?></h1>
            <div class="benefits-card">
                <div class="card">
                    <h2><?php echo __('Easy to Use') ?></h2>
                    <p><?php echo __('Generate your consent mode banner with a few clicks. No coding skills required.') ?></p>
                </div>
                <div class="card">
                    <h2><?php echo __('Customizable') ?></h2>
                    <p><?php echo __("Customize the banner's text, colors, and layout to fit your website's design.") ?></p>
                </div>
                <div class="card">
                    <h2><?php echo __('Responsive Design') ?></h2>
                    <p><?php echo __('Our banners are fully responsive and look great on all devices.') ?></p>
                </div>
                <div class="card">
                    <h2><?php echo __('Free') ?></h2>
                    <p><?php echo __('Use our consent mode banner generator for free. No hidden charges.') ?></p>
                </div>
            </div>

        </section>
        <div class="space"></div>

        <!-- Call to Action Section -->
        <?php include 'layouts/appSection.php' ?>
        <div class="space"></div>
        <!-- FAQ Section -->
        <section class="faq-section">
            <h1 class="faq-title"><?php echo __('Frequently Asked Questions') ?></h1>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question"><?php echo __('What is a Consent Mode Banner?') ?></div>
                    <div class="faq-answer"><?php echo __('A consent mode banner is a tool that helps websites comply with GDPR regulations by informing users about cookies and allowing them to choose which cookies they want to accept.') ?></div>
                </div>
                <div class="space"></div>

                <div class="faq-item">
                    <div class="faq-question"><?php echo __('How can I customize my banner?') ?></div>
                    <div class="faq-answer"><?php echo __('You can customize the text, colors, and layout of the banner using our easy-to-use generator. Simply fill out the form and generate the code.') ?></div>
                </div>
                <div class="space"></div>
                <div class="faq-item">
                    <div class="faq-question"><?php echo __('Is the banner responsive?') ?></div>
                    <div class="faq-answer"><?php echo __('Yes, our banners are designed to be fully responsive and will look great on all devices, from desktop computers to mobile phones.') ?></div>
                </div>
                <div class="space"></div>
                <div class="faq-item">
                    <div class="faq-question"><?php echo __('Is this service free?') ?></div>
                    <div class="faq-answer"><?php echo __('Yes, our consent mode banner generator is completely free to use. There are no hidden charges or fees.') ?></div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section class="section-default">
            <h1><?php echo __('Contact Us') ?></h1>
            <p class="text-center"><?php echo __('If you have any questions or need support, please') ?> <a href="/contact"><?php echo __('contact us') ?></a>.</p>
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
