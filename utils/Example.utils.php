<?php
// Returns an indexed array of weapons
function getWeapons() {
    return ["Zweihander", "Claymore", "Estoc", "Moonlight Greatsword"];
}

// Returns an associative array (dictionary) of enemy stats
function getEnemyStats() {
    return [
        "Hollow Soldier" => ["HP" => 150, "Stamina" => 50, "Damage" => 20],
        "Black Knight" => ["HP" => 500, "Stamina" => 80, "Damage" => 75],
        "Ornstein" => ["HP" => 1200, "Stamina" => 150, "Damage" => 120],
    ];
}

// Formats enemy data as HTML
function renderEnemies($enemies) {
    $images = [
        "Hollow Soldier" => "hollow.png",
        "Black Knight" => "black_knight.png",
        "Ornstein" => "ornstein.png"
    ];

    $output = "<div class='enemy-list'>";
    foreach ($enemies as $name => $stats) {
        $imgPath = "../../assets/img/" . $images[$name];
        $output .= "<div class='enemy'>";
        $output .= "<h3>$name</h3>";
        $output .= "<img src='$imgPath' alt='$name' style='max-width:150px;margin-bottom:10px;'><ul>";
        foreach ($stats as $stat => $value) {
            $output .= "<li><strong>$stat:</strong> $value</li>";
        }
        $output .= "</ul></div>";
    }
    $output .= "</div>";
    return $output;
}
