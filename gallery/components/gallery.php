<h1>Галлерея</h1>

<?php

$images = scandir("images-small");
echo '<div  style="display:flex; flex-wrap: wrap; justify-content:space-around;">';
for($i = 2; $i < count($images); $i++) {?>
    <a href="components/bigImage.php?img=<?= $images[$i]?>" target="_blank">
        <img width="250" style="margin:5;" src="images/<?= $images[$i]?>">
    </a>    
<?php
} echo "</div>";
?>

