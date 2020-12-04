<?php require_once 'includes/conexion.php'; ?>
    <?php require_once 'includes/helpers.php'; ?>
    
    <!-- Si el id de un post_actual no existe, hacer una redireccion -->
    <?php 
        // $_GET array super global que viaja por la url
        $post_current = getPost($conexion, $_GET['id']);
            if(!isset($post_current['id'])){
                header('Location: index.php');
            }
    ?>
    
    <!-- HEADER -->
    <?php require_once 'includes/header.php' ?>
    <!-- CONTAINER -->
    <!-- SIDEBAR -->
    <?php require_once 'includes/sidebar.php' ?>   

    <!-- MAIN -->
    <div id="main">
        <h1><?=$post_current['title']?></h1>
        <a href="category.php?id=<?=$post_current['category_id']?>">           
            <h2><?=$post_current['category']?></h2>
        </a>
        <h4><?=$post_current['date']?> | <?=$post_current['user']?></h4>
        <p><?=$post_current['description']?></p>

        <?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $post_current['user_id']): ?>
            <!-- Button -->
            <br>
            <a href="update-post.php?id=<?=$post_current['id']?>" class="boton boton-verde">Edit Post</a>
            <a href="delete-post.php?id=<?=$post_current['id']?>" class="boton">Delete Post</a>
        <?php endif; ?>
        
    </div> <!-- END MAIN -->

    <!-- FOOTER -->
    <?php require_once 'includes/footer.php' ?> 
