<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Evernight_7th</title>

<style>
body {
    margin: 0;
    font-family: "Segoe UI", Arial, sans-serif;
    background: #0f0f1a;
}

/* NAVBAR */
.navbar {
    position: sticky;
    top: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 25px;
    background: rgba(30, 30, 50, 0.9);
    backdrop-filter: blur(8px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.4);
    z-index: 1000;
}

/* LOGO */
.logo-container {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo-container img {
    width: 42px;
    height: 42px;
    border-radius: 8px;
    transition: 0.3s;
}

.logo-container img:hover {
    transform: scale(1.1);
}

.site-name {
    font-size: 22px;
    font-weight: bold;
    color: #c084fc;
}

/* MENU */
.nav-links {
    display: flex;
    gap: 25px;
    align-items: center;
}

.nav-links a {
    color: #eee;
    text-decoration: none;
    font-size: 15px;
    position: relative;
    transition: 0.3s;
}

/* underline animation */
.nav-links a::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: -4px;
    background: #a855f7;
    transition: 0.3s;
}

.nav-links a:hover::after {
    width: 100%;
}

.nav-links a:hover {
    color: #c084fc;
}

/* BURGER */
.burger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.burger span {
    height: 3px;
    width: 26px;
    background: white;
    margin: 4px;
    border-radius: 2px;
    transition: 0.4s;
}

/* ANIMATION BURGER */
.burger.active span:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}
.burger.active span:nth-child(2) {
    opacity: 0;
}
.burger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

/* RESPONSIVE */
@media (max-width: 768px) {

    .nav-links {
        position: absolute;
        top: 65px;
        right: 10px;
        background: #1e1e2f;
        flex-direction: column;
        width: 220px;
        border-radius: 10px;
        padding: 15px;
        display: none;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .nav-links.active {
        display: flex;
    }

    .burger {
        display: flex;
    }
}
</style>
</head>

<body>

<nav class="navbar">

    <!-- Logo -->
    <div class="logo-container">
        <img src="https://mc-heads.net/avatar/Evernight_7th" alt="logo">
        <div class="site-name">Evernight_7th</div>
    </div>

    <!-- Menu -->
    <div class="nav-links" id="menu">
        <a href="#">Accueil</a>
        <a href="#">Serveur</a>
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