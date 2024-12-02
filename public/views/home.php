<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => 'Generator',
    'description' => 'Create a free consent mode banner for your website with our easy-to-use tool. Ensure compliance with GDPR, LGPD, and CCPA while providing a seamless user experience. Customize design, placement, and functionality to match your brand, all while respecting user privacy. Perfect for websites of all sizes, our solution helps you stay aligned with global data privacy regulations without hassle. Try it now and make your website compliant today!.',
    'keywords' => 'GDPR, LGPD, CCPA, consent mode banner, custom consent banner, free consent banner tool, website compliance, privacy regulations'
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
            <p class="text-center">Create a free consent mode banner for your website with our easy-to-use tool. Ensure compliance with GDPR, LGPD, and CCPA while providing a seamless user experience.</p>
            <div class="d-flex justify-content-center mt-40">
                <a class="btn" href="/generator">Generate Banner</a>
            </div>
        </section>
        <div class="space"></div>
        <!-- How It Works Section -->
        <section class="how-it-works-section">
            <h1 id="how-it-works">Steps to Implement your Consent Mode V2</h1>
            <div class="steps-grid">
                <div class="step">
                    <div class="step-icon">1️⃣</div>
                    <div class="step-content">
                        <h2>Select Preferences</h2>
                        <p>Choose your preferred banner placement, title, and button options.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">2️⃣</div>
                    <div class="step-content">
                        <h2>Customize Appearance</h2>
                        <p>Adjust the banner's appearance by setting the border radius, colors, and text.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">3️⃣</div>
                    <div class="step-content">
                        <h2>Generate Code</h2>
                        <p>Click the generate button to receive your personalized banner code.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">4️⃣</div>
                    <div class="step-content">
                        <h2>Implement</h2>
                        <p>Copy the generated code and insert it into your website's HTML.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="space"></div>
        <section class="section-banner-info">
            <div class="box">
                <div>🔘</div>
                <h2>Light-weight Script</h2>
                <p>A lightweight script which does not affect website speed</p>
            </div>
            <div class="box">
                <div>🔘</div>
                <h2>Easy to integrate</h2>
                <p>Em poucos cliques o banner de consentimento estará disponível em seu site</p>
            </div>
            <div class="box">
                <div>🔘</div>
                <h2>Browser Support</h2>
                <p>Supports all the major web browsers and devices</p>
            </div>
        </section>
        <div class="space"></div>
        <section class="d-flex section-call-generation">
            <div>
                <p class="text-center">Generate Free Consent Banner</p>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn" href="/generator">Generate Banner</a>
            </div>
        </section>

        <div class="space"></div>
        <!-- Benefits Section -->
        <section class="benefits-section">
            <h1>Benefits</h1>
            <div class="benefits-card">
                <div class="card">
                    <h2>Easy to Use</h2>
                    <p>Generate your consent mode banner with a few clicks. No coding skills required.</p>
                </div>
                <div class="card">
                    <h2>Customizable</h2>
                    <p>Customize the banner's text, colors, and layout to fit your website's design.</p>
                </div>
                <div class="card">
                    <h2>Responsive Design</h2>
                    <p>Our banners are fully responsive and look great on all devices.</p>
                </div>
                <div class="card">
                    <h2>Free</h2>
                    <p>Use our consent mode banner generator for free. No hidden charges.</p>
                </div>
            </div>

        </section>
        <div class="space"></div>
        <!-- Call to Action Section -->
        <?php include 'layouts/appSection.php' ?>
        <div class="space"></div>
        <!-- FAQ Section -->
        <section class="faq-section">
            <h1 class="faq-title">Frequently Asked Questions</h1>
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
            <h1>Contact Us</h1>
            <p class="text-center">If you have any questions or need support, please <a href="/contact">contact us</a>.</p>
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
