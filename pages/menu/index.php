<?php
require BASE_PATH . '/utils/display.menu.utils.php';
require BASE_PATH . '/handlers/menu.handlers.php';
require_once BASE_PATH . '/components/templates/header.component.php';
?>

<main class="menu">
    <h2>Full Menu</h2>
    <div class="menu-list">
        <?php displayMenu($menu); ?>
    </div>
</main>

<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>