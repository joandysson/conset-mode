<?php
$head = [
    'title' => 'Contact Us | Free Consent Mode Banner Generator',
    'description' => 'Get in touch with us for any queries, feedback, or support related to our free and customizable consent mode banner generator. We are here to help you.',
    'keywords' => 'contact us, support, queries, feedback, consent mode banner, customizable consent banner'
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

    <header>
        <a href="/">
            <h1>Consent <span class="blue">Mode</span> Banner</h1>
        </a>
    </header>
    <main class="container">
        <section class="section-default">
            <!-- Contact Form Section -->
            <section class="contact-form-section">
                <h2>Contact Us</h2>
                <form id="contact-form" action="/contact" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </section>
        </section>

        <!-- Additional sections as needed -->
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>

</body>

</html>
