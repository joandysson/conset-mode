<?php
$head = [
    'title' => __('Contact Us'),
    'description' => __('Get in touch with us for any queries, feedback, or support related to our free and customizable consent mode banner generator. We are here to help you.'),
    'keywords' => __('contact us, support, queries, feedback, consent mode banner, customizable consent banner')
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <main class="container">
        <section class="section-default">
            <h1><?php echo __('Contact Us') ?></h1>

            <!-- Contact Form Section -->
            <section class="contact-form-section">
                <form id="contact-form" action="/contact" method="post">
                    <label for="name"><?php echo __('Name:') ?></label>
                    <input type="text" id="name" name="name" required>

                    <label for="email"><?php echo __('Email:') ?></label>
                    <input type="email" id="email" name="email" required>

                    <label for="message"><?php echo __('Message:') ?></label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit"><?php echo __('Send Message') ?></button>
                </form>
            </section>
        </section>

        <div class="space"></div>
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

        <!-- Additional sections as needed -->
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
