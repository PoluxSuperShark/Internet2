<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos d'Internet 2 | PoluxSuperShark</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        h1,
        p {
            text-align: justify;
            margin-left: 2rem;
            margin-right: 2rem;
        }
    </style>
</head>

<body>

    <?php include "./src/components/navbar.php"; ?>

    <!-- Content -->
    <main>
        <?php include "./src/about_page.php"; ?>
    </main>

    <?php include "./src/components/footer.php"; ?>

    <script>
    function toggleMenu() {
        document.getElementById("menu").classList.toggle("active");
        document.getElementById("burger").classList.toggle("active");
    }
    </script>
    
</body>

</html>