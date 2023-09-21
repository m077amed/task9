<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if(!isset($_SESSION['auth'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">register</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../crud/table.php">admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../bookingTable.php">booking</a>
                    </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
</nav>