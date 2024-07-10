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
    <main>
        <section id="urlbox">
            <h1> 404 </h1>
            <p class="boxtextcenter">page not found</p>
            <a href="/" class="colorbutton">Go back home </a><br><br>
        </section>
    </main>

    <?php include 'layouts/footer.php' ?>
    <?php include 'layouts/script.php' ?>
</body>

</html>
