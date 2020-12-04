<?php require_once 'includes/redirect.php'?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/sidebar.php' ?>  

<!-- MAIN -->
<div id="main">
    <h1>Create Category</h1>
    <p>Add news categories the blog</p>
    <br>
    <form action="save-category.php" method="POST">
        <label for="name">Name category</label>
        <input type="text" name="name">

        <input type="submit" value="Save">
    </form>
</div> <!-- END MAIN -->
    
<!-- FOOTER -->
 <?php require_once 'includes/footer.php' ?> 