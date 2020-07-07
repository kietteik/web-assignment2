<nav style="position:fxied;">
    <input type="checkbox" name="nav" id="nav" class="hidden" />
    <label for="nav" class="nav-btn">
        <i></i>
        <i></i>
        <i></i>
    </label>
    <div class="logo">
        <a href="./index.php">K.T</a>

    </div>
    <div class="nav-wrapper">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./product.php">Products</a></li>
            <li><a href="./location.php">Locations</a></li>
            <li><a href="./about.php">About Us</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <?php if (isset($_SESSION['userName'])) : ?>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle blue-button border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome <?php echo $_SESSION['userName'] ?>
                        </button>
                        <div class="dropdown-menu non-background border-0 align-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item blue-button border-0 my-1" href="profile.php">Profile</a>
                            <a class="dropdown-item blue-button border-0 my-1" href="?logout-button=1">Logout</a>
                        </div>
                    </div>
                </li>
            <?php else : ?>
                <li><a href="./login.php" class="last-nav-btn">Login</a></li>
                <li><a href="./signup.php" class=" signup-btn">Signup</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>