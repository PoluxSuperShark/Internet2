<?php
// Lire le JSON
$json = file_get_contents("./data/companies.json");
$companies = json_decode($json, true);

// Gestion de la recherche
$search = $_GET['q'] ?? '';
$search = trim($search);

// Filtrer les résultats si recherche
$results = [];
if ($search !== '') {
    foreach ($companies as $company) {
        if (stripos($company['name'], $search) !== false) {
            $results[] = $company;
        }
    }
} else {
    $results = $companies; // pas de recherche -> tout afficher
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Internet 2 | PoluxSuperShark</title>
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <?php include "./src/components/navbar.php"; ?>
    
    <main>
        <?php include "./src/search_page.php"; ?>
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