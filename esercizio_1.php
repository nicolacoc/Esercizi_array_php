<?php
$frase = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
$colors= array('white', 'green', 'red', 'blue', 'black');
$modify= $frase;
$inRiga = null;
$inColonna = null;
foreach ($colors as $color ) {
    $modify = str_replace($color , "<span class='{$color}'>&nbsp;{$color}&nbsp;</span>", $modify);
}
foreach ($colors as $color ) {
    $inRiga .= "<span class='{$color}'>{$color}</span>" . ", ";
}
foreach ($colors as $color ) {
    $inColonna .= "<span class='{$color}'>{$color}</span>". "<br>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Esercizio Array_1</title>
    <link rel="stylesheet" href="ese1.css">
</head>
<body>
<div class="container">
    <div class="frase_1">
<?php echo $modify ?>
    </div>
    <div class="frase_2">
        <?php echo $inRiga ?>
    </div>
    <div class="frase_3">
        <?php echo $inColonna ?>
    </div>
</div>
</body>
</html>