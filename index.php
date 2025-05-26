<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/display.menu.utils.php';
require_once BASE_PATH . '/handlers/menu.handlers.php';
require_once BASE_PATH . '/components/templates/header.component.php';
?>

<section class="hero">
    <div class="hero-content">
        <h1>Welcome to (PHP) Pinoy Hot Plates</h1>
        <p>Discover mouthwatering dishes made with passion and served with love. Come hungry, leave happy!</p>
        <a href="/pages/menu/index.php" class="btn">View Our Menu</a>
    </div>
</section>


<section class="about">
    <h2>Deliciously Different</h2>
    <p>At (PHP) Pinoy Hot Plates, we bring people together with comforting flavors, cozy vibes, and unforgettable food.
        Whether
        you're in for a quick bite or a full meal, we’ve got something you’ll love.</p>
</section>


<main class="home">
    <h2>Best Sellers</h2>
    <div class="menu-list">
        <?php displayMenu($bestSellers); ?>
    </div>
</main>

<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>