<?php
if (!function_exists('displayMenu')) {
    function displayMenu($items)
    {
        foreach ($items as $dish) {
            echo "<div class='menu-item'>";
            echo "<img src='pages/menu/assets/img/{$dish['img']}' alt='{$dish['name']}' class='menu-img'>";
            echo "<h3>{$dish['name']}</h3>";
            echo "<p>{$dish['desc']}</p>";
            echo "<strong>₱{$dish['price']}</strong>";
            echo "</div>";
        }
    }
}
