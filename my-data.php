<?php require_once 'includes/redirect.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/sidebar.php';?>


<!-- MAIN -->
<div id="main">
    <h1>Update Informations Personal</h1>
    <p>Update my data</p>
    <br>

<!-- MOSTRAR ERRORES -->
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-successfully">
            <?=$_SESSION['success']?>
        </div>
    <?php elseif(isset($_SESSION['errors']['general'])): ?>
        <div class="alert alert-error">
            <?=$_SESSION['errors']['general']?>
        </div>
    <?php endif; ?>

    <form action="update-user.php" method="POST">

        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $_SESSION['user']['name']?>">
        <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'name') : ''; ?>

        <label for="lastname">LastName</label>
        <input type="text" name="lastname" value="<?= $_SESSION['user']['lastname']?>">
        <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'lastname') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $_SESSION['user']['email']?>">
        <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'email') : ''; ?>

        <input type="submit" name="submit" value="Update">
    </form>
    <?php deleteErrors(); ?>
</div> <!-- END MAIN -->

<!-- FOOTER -->
<?php require_once 'includes/footer.php' ?> 