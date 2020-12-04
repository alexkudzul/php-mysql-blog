<?php require_once 'conexion.php' ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Blog of Videogames
            </a>
        </div>
        <!-- MENU -->
        <nav id="nav">
            <ul>
                <li><a href="index.php">Index</a></li> 
                <?php $categories = getCategories($conexion); ?>
                    <?php if(!empty($categories)): ?>
                        <!-- Por cada fila que recorra obtenga un array asociativo -->
                        <?php while($category = mysqli_fetch_assoc($categories)): ?>
                            <li><a href="category.php?id=<?=$category['id'] ?>"><?=$category['name'] ?> </a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTAINER -->
    <div id="container">