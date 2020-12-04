    
    <!-- Si el id de una categoria_actual no existe, hacer una redireccion -->
    <?php 
        // Verifica si existe datos por post
        if(!isset($_POST['search'])){
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
        <h1>Searching <?= $_POST['search'] ?></h1>
        <?php 
            // $_POST array super global que viaja de manera interna
            $searchPost = searchPost($conexion, $_POST['search']); 
        ?>
        <!-- Si posts no esta vacio y el numero de filas que devuelve la consulta es igual o mayor a 1 -->
        <?php if(!empty($searchPost) && mysqli_num_rows($searchPost)): ?>
            <!-- Por cada fila que recorra obtenga un array asociativo -->
            <?php while($post = mysqli_fetch_assoc($searchPost)): ?>
                <article class="post">
                    <a href="post-detail.php?id=<?=$post['id']?>">
                        <h2><?=$post['title'] ?></h2>
                        <span class="date"><?=$post['category']. ' | '. $post['date']  ?></span>
                        <!-- Substrae la descripcion iniciando de 0 a 180 caracteres -->
                        <p><?=substr($post['description'], 0, 180)."..." ?></p>
                    </a>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="alert">No hay posts en la busqueda</div>
        <?php endif;?>
        
    </div> <!-- END MAIN -->

    <!-- FOOTER -->
    <?php require_once 'includes/footer.php' ?> 
</body>

</html>