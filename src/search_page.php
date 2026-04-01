<!-- Search Form -->
<form class="search-form" method="get" action="">
    <input type="text" name="q" placeholder="Rechercher sur Internet 2" value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Recherche</button>
</form>

<!-- Results -->
<ul class="results">
<?php if (!empty($results)): ?>
    <?php foreach ($results as $company): ?>
        <li>
            <img src="<?= htmlspecialchars($company['logo']) ?>" alt="<?= htmlspecialchars($company['name']) ?>">
            <a href="<?= htmlspecialchars($company['website']) ?>" target="_blank"><?= htmlspecialchars($company['name']) ?></a>
            <br>
            <p><?= htmlspecialchars($company['description']) ?></p>
        </li>
    <?php endforeach; ?>
<?php else: ?>
    <li>Aucune entreprise déclarée.</li>
<?php endif; ?>
</ul>