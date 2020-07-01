<nav>
    <input type="checkbox" name="nav" id="nav" class="hidden" />
    <label for="nav" class="nav-btn">
        <i></i>
        <i></i>
        <i></i>
    </label>
    <div class="logo">
        <a href="./index.php">K.</a>

    </div>
    <div class="nav-wrapper">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./product.php">Products</a></li>
            <li><a href="./price.php">Prices</a></li>
            <li><a href="./about.php">About Us</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <?php if (isset($_SESSION['name'])) : ?>
                <li><a href="./index.php" class="last-nav-btn">Welcome <?php echo $_SESSION['name'] ?></a></li>

                <li><a name="logout-button" href="?logout-button=1" class=" signup-btn">Logout</a></li>

            <?php else : ?>
                <li><a href="./login.php" class="last-nav-btn">Login</a></li>
                <li><a href="./signup.php" class=" signup-btn">Signup</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>