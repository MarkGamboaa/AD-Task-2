<?php
include 'components/templates/header.component.php';
include 'handlers/menu.handler.php';
include 'utils/displayMenu.utils.php';
?>

<main class="menu">
    <h2>Full Menu</h2>
    <div class="menu-list">
        <?php displayMenu($menu); ?>
    </div>
</main>

<?php include 'components/templates/footer.component.php'; ?>