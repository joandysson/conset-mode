<!DOCTYPE html>
<html lang="en">

<?php
$head = [
    'title' => 'Generator',
    'description' => 'Create a free consent mode banner for your website with our easy-to-use tool. Ensure compliance with GDPR, LGPD, and CCPA while providing a seamless user experience. Customize design, placement, and functionality to match your brand, all while respecting user privacy. Perfect for websites of all sizes, our solution helps you stay aligned with global data privacy regulations without hassle. Try it now and make your website compliant today!.',
    'keywords' => 'GDPR, LGPD, CCPA, consent mode banner, custom consent banner, free consent banner tool, website compliance, HTML CSS JavaScript snippets, privacy regulations'
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
            <h1>Cookies Explained</h1>
            <article>
                <h2>What Are Cookies?</h2>
                <p>
                    Cookies are small text files stored on a user's device by a website. They contain data about user activity and preferences, enabling websites to provide personalized experiences and retain essential information, such as login credentials or shopping cart items.
                </p>
                <ul>
                    <li>Stored locally on the user's browser or device.</li>
                    <li>Facilitate seamless navigation and user convenience.</li>
                    <li>Widely used across the web for functionality and analytics.</li>
                </ul>
            </article>
            <article>
                <h2>Types of Cookies</h2>
                <p>
                    Not all cookies are the same. Different types of cookies serve distinct purposes, ranging from essential website operations to personalized advertising.
                </p>
                <ul>
                    <li>
                        <strong>Essential Cookies:</strong> These are necessary for the core functionalities of a website, such as secure logins or saving items in a shopping cart.
                    </li>
                    <li>
                        <strong>Performance Cookies:</strong> Collect anonymized data about how users interact with a website, helping improve site performance and usability.
                    </li>
                    <li>
                        <strong>Functional Cookies:</strong> Store user preferences, like language settings or region-specific details, to enhance user experience.
                    </li>
                    <li>
                        <strong>Advertising Cookies:</strong> Track user activity to deliver personalized advertisements based on browsing habits.
                    </li>
                </ul>
            </article>
            <article>
                <h2>Why Are Cookies Important?</h2>
                <p>
                    Cookies enable websites to function effectively while enhancing the user experience. They also support businesses in understanding user behavior, optimizing performance, and delivering targeted services.
                </p>
                <ul>
                    <li>Enable seamless login and personalized experiences.</li>
                    <li>Provide critical insights into user activity and preferences.</li>
                    <li>Support marketing and advertising strategies.</li>
                </ul>
            </article>
            <article>
                <h2>Privacy Concerns</h2>
                <p>
                    While cookies are essential, they can raise privacy concerns if misused. Tracking cookies, in particular, have prompted global data protection laws like GDPR, LGPD, and CCPA, ensuring users have control over their data.
                </p>
                <ul>
                    <li>Some cookies collect sensitive personal data.</li>
                    <li>Consent is required for non-essential cookies in many jurisdictions.</li>
                    <li>Transparency and control are critical for compliance and trust.</li>
                </ul>
            </article>
            <article>
                <h2>How Google Consent Mode Manages Cookies</h2>
                <p>
                    Google Consent Mode V2 provides a robust framework for managing cookies in compliance with global privacy laws. By integrating with Consent Management Platforms, it dynamically adjusts cookie behavior based on user consent.
                </p>
                <ul>
                    <li>Enables anonymized data collection when consent is not granted.</li>
                    <li>Supports user preference updates in real time.</li>
                    <li>Ensures compliance with laws like GDPR, LGPD, and others.</li>
                </ul>
            </article>
        </section>
        <div class="space"></div>
        <!-- Call to Action Section -->
        <?php include 'layouts/appSection.php' ?>
        <div class="space"></div>
        <section id="data-categories" class="data-categories">
            <h1>Data Categories</h1>
            <p class="text-center">Understanding how we use your data</p>
            <div class="category">
                <h2>Necessary</h2>
                <p><strong>Essential for website functionality:</strong> This category includes data that is strictly necessary for the website to function properly.</p>
                <ul>
                    <li>Examples: Session cookies, authentication tokens, and data required to complete a purchase.</li>
                    <li><strong>User consent:</strong> Typically, users don't have the option to opt-out of necessary data processing.</li>
                </ul>
            </div>
            <div class="category">
                <h2>Marketing</h2>
                <p><strong>Used for targeted advertising:</strong> This category includes data used to personalize ads and track user behavior for marketing purposes.</p>
                <ul>
                    <li>Examples: Cookies that track browsing history, demographic information, and interests.</li>
                    <li><strong>User consent:</strong> Users can usually opt-out of marketing data processing.</li>
                </ul>
            </div>
            <div class="category">
                <h2>Analytics</h2>
                <p><strong>Used for website performance and user behavior:</strong> This category includes data used to analyze website traffic, user engagement, and other metrics to improve the website's performance.</p>
                <ul>
                    <li>Examples: Cookies that track page views, time spent on site, and click-through rates.</li>
                    <li><strong>User consent:</strong> Users can usually opt-out of analytics data processing.</li>
                </ul>
            </div>
            <div class="category">
                <h2>Preferences</h2>
                <p><strong>Used for personalized user experience:</strong> This category includes data used to customize the website's appearance or content based on user preferences.</p>
                <ul>
                    <li>Examples: Cookies that remember language preferences, theme choices, or previously viewed products.</li>
                    <li><strong>User consent:</strong> Users can usually opt-out of preference data processing.</li>
                </ul>
            </div>
            <div class="note">
                <p><strong>Summary:</strong> Necessary data is essential for the website to function. Marketing data is used to target ads and track user behavior. Analytics data is used to analyze website performance. Preferences data is used to personalize the user experience. Users typically have more control over marketing, analytics, and preference data processing.</p>
            </div>
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>

    <?php include 'layouts/script.php' ?>
</body>

</html>
