<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => 'Free Consent Mode Banner Generator | Customizable & Easy to Use',
    'description' => 'Create custom consent mode banners for your website with ease using our free web application. Customize placement, border radius, title, button options, colors, and more. Generate HTML, CSS, and JavaScript code snippets for seamless integration. Enhance user experience and comply with privacy regulations effortlessly.',
    'keywords' => 'consent mode banner, custom consent banner, free consent banner tool, website compliance, HTML CSS JavaScript snippets, privacy regulations'
];
?>

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <div class="container">
        <header>
            <a href="/">
                <h1>Consent <span class="blue">Mode</span> Banner</h1>
            </a>
            <p>Create customizable and compliant consent banners for your website with ease.</p>
        </header>
        <main>
            <!-- How It Works Section -->
            <section class="how-it-works-section">
                <h2>How It Works</h2>
                <div class="steps-grid">
                    <div class="step">
                        <div class="step-icon">1️⃣</div>
                        <div class="step-content">
                            <h3>Select Preferences</h3>
                            <p>Choose your preferred banner placement, title, and button options.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-icon">2️⃣</div>
                        <div class="step-content">
                            <h3>Customize Appearance</h3>
                            <p>Adjust the banner's appearance by setting the border radius, colors, and text.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-icon">3️⃣</div>
                        <div class="step-content">
                            <h3>Generate Code</h3>
                            <p>Click the generate button to receive your personalized banner code.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-icon">4️⃣</div>
                        <div class="step-content">
                            <h3>Implement</h3>
                            <p>Copy the generated code and insert it into your website's HTML.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-default">
                <h2>Configuration</h2>
                <!-- Your configuration form and code generation UI goes here -->
                <div id="customization-ui">
                    <h3>Customize Your Consent Banner</h3>
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

                    <h3>Generated CDN Code</h3>

                    <div class="code-section">
                        <h4>CDN Code (Place inside &lt;body&gt; tag)</h4>
                        <pre><code id="generated-link"></code></pre>
                        <button onclick="copyToClipboard('generated-link')">Copy</button>
                    </div>
                    <!--
                    <h3>Generated Code</h3>

                    <div class="code-section">
                        <h4>HTML Code (Place inside &lt;body&gt; tag)</h4>
                        <pre><code id="generated-html"></code></pre>
                        <button onclick="copyToClipboard('generated-html')">Copy HTML Code</button>

                        <h4>CSS Code (Place inside &lt;head&gt; tag or external stylesheet)</h4>
                        <pre><code id="generated-css"></code></pre>
                        <button onclick="copyToClipboard('generated-css')">Copy CSS Code</button>

                        <h4>JavaScript Code (Place before closing &lt;/body&gt; tag)</h4>
                        <pre><code id="generated-js"></code></pre>
                        <button onclick="copyToClipboard('generated-js')">Copy JS Code</button>
                    </div> -->
                </div>
            </section>

            <!-- Benefits Section -->
            <section class="benefits-section">
            <h2>Benefits</h2>
            <div class="benefits-card">
                <div class="card">
                    <h3>Easy to Use</h3>
                    <p>Generate your consent mode banner with a few clicks. No coding skills required.</p>
                </div>
                <div class="card">
                    <h3>Customizable</h3>
                    <p>Customize the banner's text, colors, and layout to fit your website's design.</p>
                </div>
                <div class="card">
                    <h3>Responsive Design</h3>
                    <p>Our banners are fully responsive and look great on all devices.</p>
                </div>
                <div class="card">
                    <h3>Free</h3>
                    <p>Use our consent mode banner generator for free. No hidden charges.</p>
                </div>
            </div>

            </section>

            <!-- Call to Action Section -->
            <section class="call-to-action">
                <h2>Discover Our App</h2>
                <p>Experience the simplicity and efficiency of our PWA app for creating consent mode banners.</p>
                <button class="install-app">Try the App</button>
            </section>

            <!-- FAQ Section -->
            <section class="faq-section">
                <h2 class="faq-title">Frequently Asked Questions</h2>
                <div class="faq">
                    <div class="faq-item">
                        <div class="faq-question">What is a Consent Mode Banner?</div>
                        <div class="faq-answer">A consent mode banner is a tool that helps websites comply with GDPR regulations by informing users about cookies and allowing them to choose which cookies they want to accept.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">How can I customize my banner?</div>
                        <div class="faq-answer">You can customize the text, colors, and layout of the banner using our easy-to-use generator. Simply fill out the form and generate the code.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Is the banner responsive?</div>
                        <div class="faq-answer">Yes, our banners are designed to be fully responsive and will look great on all devices, from desktop computers to mobile phones.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Is this service free?</div>
                        <div class="faq-answer">Yes, our consent mode banner generator is completely free to use. There are no hidden charges or fees.</div>
                    </div>
                </div>
            </section>

            <section class="section-default">
                <h2>Contact Us</h2>
                <p>If you have any questions or need support, please <a href="/contact">contact us</a>.</p>
            </section>

            <!-- Additional sections as needed -->
        </main>

        <!-- Preview section -->
        <section id="preview-section">

        </section>

    </div>
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
