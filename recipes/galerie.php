<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin-recipes</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <h1>Galerie </h1>
    <?php
$image = glob("image/*.jpg");
foreach ($image as $img) {
    echo "<img src='$img' alt='image' style='width:200px; margin:10px;'>";
}
?>

    <footer>
        <p>&copy; 2025 Odin Recipes</p>
    </footer>
</body>
</html>