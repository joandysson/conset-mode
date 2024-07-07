
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

    <div class="container">
        <header>
            <h1>Consent <span class="blue">Mode</span> Banner</h1>
        </header>
        <main>
            <section class="config-section">
                <h2>Configuration</h2>
                <!-- Your configuration form and code generation UI goes here -->
                <div id="customization-ui">
                    <h3>Customize Your Consent Banner</h3>
                    <form id="customization-form">
                        <label for="placement">Banner Placement:</label>
                        <select id="placement" name="placement">
                            <option value="bottom">Bottom</option>
                            <option value="top">Top</option>
                            <option value="bottom-left">Bottom Left</option>
                            <option value="bottom-right">Bottom Right</option>
                            <option value="bottom-center">Bottom Center</option>
                        </select>

                        <label for="border-radius">Border Radius (0-10px):</label>
                        <input type="number" id="border-radius" name="border-radius" min="0" max="10" value="0">

                        <label for="button-radius">Button Radius (0-10px):</label>
                        <input type="number" id="button-radius" name="button-radius" min="0" max="10" value="0">

                        <label for="banner-title">Banner Title:</label>
                        <input type="text" id="banner-title" value="Cookie settings" placeholder="Cookie settings">

                        <div class="color-group">
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

                        <label for="button-options">Button Options:</label>
                        <select id="button-options" name="button-options">
                            <option value="all">Show All Buttons</option>
                            <option value="accept-only">Accept Only Button</option>
                        </select>

                        <label for="banner-text">Banner Text:</label>
                        <textarea id="banner-text" name="banner-text">We use cookies to provide you with the best possible experience...</textarea>

                        <button type="button" id="generate-code">Generate Code</button>
                        <button type="button" id="example-code">Download Code</button>
                        <button type="button" id="cdn-code">CDN Code (Recomendaded)</button>
                    </form>

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
                    </div>
                </div>
            </section>

            <!-- Additional sections as needed -->
        </main>

        <!-- Preview section -->
        <section id="preview-section">

        </section>

        <?php include 'layouts/footer.php' ?>
    </div>

    <?php include 'layouts/script.php' ?>

</body>

</html>
