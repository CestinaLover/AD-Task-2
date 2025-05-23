<?php
include '../../utils/Example.utils.php';
$enemies = getEnemyStats();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dark Souls Lore - AD-Task-2</title>
    <link rel="stylesheet" href="assets/css/example.css">
</head>
<body>
    <div class="container">
        <h1 class="title">🗡 Dark Souls: Programming Bonfire 🗡</h1>

        <section class="weapons">
            <h2>Legendary Weapons</h2>
            <ul>
                <?php foreach(getWeapons() as $weapon): ?>
                    <li><?= $weapon ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="enemies">
            <h2>Enemy Stats</h2>
            <?= renderEnemies($enemies); ?>
        </section>

        <div style="margin-top: 2rem;">
            <a href="../../index.php" style="display:inline-block;padding:0.6rem 1.2rem;background:#f0d070;color:#000;text-decoration:none;border-radius:8px;">
                ⬅ Back to Homepage
            </a>
        </div>
    </div>
</body>
</html>
