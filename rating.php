<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1>Rating for...</h1>
<?php
$rating = 3; // retrieved from database/json
for($i=1; $i<=5; $i++){
    echo '<div class="parent">';
    echo '<img src="ster_open.svg" class="child1" />';
    if($i <= $rating){
        echo '<img src="ster.svg" class="child2" title="'.$i.'" />';
    }
    echo '</div>&nbsp;';
}
?>
</body>
</html>