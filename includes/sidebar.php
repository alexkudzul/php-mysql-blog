<!-- SIDEBAR -->
 <aside id="sidebar">
    <div id="searching" class="block-aside">
        <h3>Search</h3>

        <form action="search.php" method="POST">
            <input type="text" name="search">

            <input type="submit" value="Search">
        </form>
    </div>

    <?php if(isset($_SESSION['user'])): ?>
    <div id="user-login" class="block-aside">
        <h3>Bienvenido, <?=$_SESSION['user']['name'].' '. $_SESSION['user']['lastname']; ?></h3>
        <!-- Button -->
        <a href="create-post.php" class="boton boton-verde">Create Post</a>
        <a href="create-category.php" class="boton">Create Category</a>
        <a href="my-data.php" class="boton boton-naranja">My data</a>
        <a href="logout.php" class="boton boton-rojo">Logout</a>
        <!-- <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form> -->
    </div>
    <?php endif; ?>
    
    <?php if(!isset($_SESSION['user'])): ?>
    <div id="login" class="block-aside">
        <h3>Login</h3>
        
        <?php if(isset($_SESSION['error_login'])): ?>
            <div id="user-login" class="alert alert-error">
                <?=$_SESSION['error_login'] ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Password</label>
            <input type="password" name="password">

            <input type="submit" value="Login">
        </form>
    </div>
    <div id="register" class="block-aside">
        <h3>Register</h3>

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

        <form action="register.php" method="POST">

            <label for="name">Name</label>
            <input type="text" name="name">
            <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'name') : ''; ?>

            <label for="lastname">LastName</label>
            <input type="text" name="lastname">
            <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'lastname') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email">
            <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'email') : ''; ?>

            <label for="password">Password</label>
            <input type="password" name="password">
            <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'password') : ''; ?>

            <input type="submit" name="submit" value="Register">
        </form>
        <?php deleteErrors(); ?>
    </div>
    <?php endif; ?>
</aside>