<?php require_once 'includes/redirect.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/sidebar.php';?>

<!-- MAIN -->
<div id="main">
    <h1>Create Post</h1>
    <p>Add news posts the blog</p>
    <br>
    <form action="save-post.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title">
        <?php echo isset($_SESSION['errors_post']) ? viewErrors($_SESSION['errors_post'], 'title') : ''; ?>


        <label for="description">Description:</label>
        <textarea name="description" id="" cols="100" rows="10"></textarea>
        <?php echo isset($_SESSION['errors_post']) ? viewErrors($_SESSION['errors_post'], 'description') : ''; ?>

        <label for="category">Category</label>
        <select name="category" id="category">
            <?php $categories = getCategories($conexion) ?>
                <?php if(!empty($categories)): ?>
                    <!-- Por cada fila que recorra obtenga un array asociativo -->
                    <?php while($category = mysqli_fetch_assoc($categories)):?>
                        <option value="<?=$category['id']?>">
                            <?=$category['name'] ?>
                        </option>
                    <?php endwhile;?>
                <?php endif;?>
        </select>
        
        <?php echo isset($_SESSION['errors_post']) ? viewErrors($_SESSION['errors_post'], 'category') : ''; ?>

        <input type="submit" value="Save">
    </form>
    <?php deleteErrors(); ?>
</div> <!-- END MAIN -->
    
<!-- FOOTER -->
 <?php require_once 'includes/footer.php' ?> 