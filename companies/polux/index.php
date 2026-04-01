<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css">
<title>PoluxSuperShark</title>
</head>

<body>

<nav class="navbar">

    <!-- Logo -->
    <div class="logo-container">
        <img src="https://mc-heads.net/avatar/PoluxSuperShark" alt="logo">
        <div class="site-name">PoluxSuperShark</div>
    </div>

    <!-- Menu -->
    <div class="nav-links" id="menu">
        <a href="/">Accueil</a>
        <a href="./harmo.php">Harmo</a>
        <a href="#">Boutique</a>
        <a href="#">Contact</a>
    </div>

    <!-- Burger -->
    <div class="burger" id="burger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>

</nav>

<script>
function toggleMenu() {
    document.getElementById("menu").classList.toggle("active");
    document.getElementById("burger").classList.toggle("active");
}
</script>

</body>
</html>