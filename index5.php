<html>
<body>
<?php
$h = date("h");
if($h >= 0 && $h < 12){
echo "<p> " .$h. "hs. Bom dia à todos!</p>";
}else if($h >= 12 && $h < 18){
echo "<p> " .$h. "hs. Boa tarde à todos!</p>";
}else{
echo "<p> " .$h. "hs. Boa noite à todos!</p>";
}
?>
</body>
</html>