<?php
$lengthRectangle = $_POST['lengthRectangle'];
$widthRectangle = $_POST['widthRectangle'];
for ($i = 0; $i < $widthRectangle; $i++) {
    for ($j = 0; $j < $lengthRectangle; $j++) {
        echo '* ';
    }
    echo '<br>';
}
$heightTriangle = $_POST['heightTriangle'];
$typeTriangle = $_POST['typeTriangle'];
if ($typeTriangle == 'top-left') {
    for ($i = 0; $i < $heightTriangle; $i++) {
        for ($j = $heightTriangle; $j - $i > 0; $j--) {
            echo '* ';
        }
        echo '<br>';
    }
}
if ($typeTriangle == 'top-right') {
    for ($i = 0; $i < $heightTriangle; $i++) {
        for ($t = 0; $i - $t > 0; $t++) {
            echo '&nbsp;&nbsp;&nbsp;';
        }
        for ($j = $heightTriangle; $j - $i > 0; $j--) {
            echo '* ';
        }
        echo '<br>';
    }
}
if ($typeTriangle == 'bottom-left') {
    for ($i = 0; $i < $heightTriangle; $i++) {
        for ($j = 0; $i - $j >= 0; $j++) {
            echo '* ';
        }
        echo '<br>';
    }
}
if ($typeTriangle == 'bottom-right') {
    for ($i = 0; $i < $heightTriangle; $i++) {
        for ($t = $heightTriangle - 1; $t - $i > 0; $t--) {
            echo '&nbsp;&nbsp;&nbsp;';
        }
        for ($j = 0; $i - $j >= 0; $j++) {
            echo '* ';
        }
        echo '<br>';
    }
}
$heightIsoscelesTriangle = $_POST['heightIsoscelesTriangle'];
for ($i = 0; $i < $heightIsoscelesTriangle; $i++) {
    for ($t = $heightIsoscelesTriangle - 1; $t - $i > 0; $t--) {
        echo '&nbsp;&nbsp;&nbsp;';
    }
    for ($j = 0; 2 * $i - $j >= 0; $j++) {
        echo '* ';
    }
    echo '<br>';
}


