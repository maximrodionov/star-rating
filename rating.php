<?php
$rating = 3; // известный рейтинг 

for ($i = 1; $i <= 4; $i++) {
    echo ($i <= $rating) ? "★" : "☆";
}
