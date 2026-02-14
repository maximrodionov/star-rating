<?php
$rating = 3; // известный рейтинг 

for ($i = 2; $i <= 4; $i++) { // set $i to 2 to show empty stars for lowest rating ☆☆☆☆ (1/4)
    echo ($i <= $rating) ? "★" : "☆";
}
