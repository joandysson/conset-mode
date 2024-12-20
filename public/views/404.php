<?php
$head = [
    'title' => 'Page Not Found',
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

    <main class="container">
        <section class="section-default">
            <h1>Page not found</h1>
            <p>Oops! The page you are looking for could not be found. Please check the URL or return to the home page.</p>

            <div class="space"></div>

            <div style="display: flex; justify-content: center;">
                <a href="/" class="btn">Go back home </a>
            </div>
        </section>
        <div class="space"></div>

        <!-- Call to Action Section -->
        <?php include 'layouts/appSection.php' ?>

    </main>
    <?php include 'layouts/footer.php' ?>
    <?php include 'layouts/script.php' ?>
</body>

</html>
