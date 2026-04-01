<?php
// Backend API Deezer intégré
if (isset($_GET['q'])) {
    header('Content-Type: application/json');

    $query = urlencode($_GET['q']);
    $url = "https://api.deezer.com/search?q=$query";

    echo file_get_contents($url);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Harmo 🎵</title>
<link rel="stylesheet" href="../style.css">
<style>
body {
    font-family: Arial;
    background: radial-gradient(circle at top, #14001f, #000000);
    color: white;
    text-align: center;
}

/* LOGO */
h1 {
    font-size: 50px;
    color: #c77dff;
    animation: glow 2s infinite alternate;
    text-shadow: 
        0 0 5px #c77dff,
        0 0 10px #c77dff,
        0 0 20px #9d4edd,
        0 0 40px #7b2cbf;
}

/* INPUT */
input {
    padding: 12px;
    width: 300px;
    border-radius: 10px;
    border: none;
    outline: none;
    background: #1a001f;
    color: white;
    box-shadow: 0 0 10px #9d4edd;
}

/* BOUTON */
button {
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: #9d4edd;
    color: white;
    cursor: pointer;
    font-weight: bold;
    box-shadow: 0 0 10px #9d4edd, 0 0 20px #7b2cbf;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.1);
    box-shadow: 
        0 0 20px #c77dff,
        0 0 40px #9d4edd,
        0 0 60px #7b2cbf;
}

/* GRID */
#results {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

/* CARTE */
.music {
    background: #120018;
    margin: 15px;
    padding: 15px;
    border-radius: 15px;
    width: 260px;
    transition: 0.3s;
    box-shadow: 0 0 10px rgba(157,78,221,0.2);
}

/* HOVER */
.music:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 
        0 0 10px #c77dff,
        0 0 20px #9d4edd,
        0 0 40px #7b2cbf;
}

/* IMAGE */
.music img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 
        0 0 10px #9d4edd,
        0 0 20px #7b2cbf;
}

/* TEXTE */
.music h3 {
    margin: 10px 0 5px;
}

.music p {
    color: #cdb4db;
    font-size: 14px;
}

/* AUDIO */
audio {
    width: 100%;
    margin-top: 10px;
    filter: drop-shadow(0 0 5px #9d4edd);
}

/* ANIMATION */
@keyframes glow {
    from { text-shadow: 0 0 10px #9d4edd; }
    to { text-shadow: 0 0 40px #c77dff; }
}
</style>
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

<h1>🎵armo</h1>

<input type="text" id="search" placeholder="Rechercher une musique...">
<button onclick="searchMusic()">Rechercher</button>

<div id="results"></div>

<script>
// Recherche musique
async function searchMusic() {
    const query = document.getElementById("search").value;
    if (!query) return;

    const res = await fetch("?q=" + encodeURIComponent(query));
    const data = await res.json();

    const results = document.getElementById("results");
    results.innerHTML = "";

    data.data.forEach(track => {
        results.innerHTML += `
            <div class="music">
                <img src="${track.album.cover_medium}">
                <h3>${track.title}</h3>
                <p>${track.artist.name}</p>
                <audio controls src="${track.preview}"></audio>
            </div>
        `;
    });
}

// Entrée = lancer recherche
document.getElementById("search").addEventListener("keypress", function(e) {
    if (e.key === "Enter") searchMusic();
});

// Une seule musique à la fois
document.addEventListener("play", function(e){
    const audios = document.querySelectorAll("audio");
    audios.forEach(a => {
        if (a !== e.target) a.pause();
    });
}, true);
</script>

</body>
</html>