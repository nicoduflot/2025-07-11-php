<?php
include './src/lib/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <?php
    include './src/layout/widgets/ressources.php';
    ?>
</head>
<body>
    <?php include './src/layout/blocks/header.php' ?>
    <?php include './src/layout/blocks/navigation.php' ?>
    <?php include './src/layout/blocks/page.php' ?>
    <?php include './src/layout/blocks/footer.php' ?>
</body>
</html>