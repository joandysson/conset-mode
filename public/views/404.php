<?php
$head = [
    'title' => 'Page Not Found | Free Consent Mode Banner Generator',
    'description' => 'Sorry, the page you are looking for does not exist. Return to our home page to generate customizable consent mode banners for your website.',
    'keywords' => '404 page, page not found, error page, free consent mode banner, customizable consent banner'
];
?>

<!DOCTYPE html>
<html lang="<?php echo $langText['html']['lang'] ?>">

<head>
    <?php include 'layouts/head.php' ?>
</head>

<body>
    <?php include 'layouts/scriptTagManager.php' ?>
    <?php include 'layouts/header.php' ?>

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
            <h1>Page not found</h1>
            <p></p>
            <a href="/" class="colorbutton">Go back home </a><br><br>
        </section>
    </main>
    <?php include 'layouts/footer.php' ?>
    <?php include 'layouts/script.php' ?>
</body>

</html>
