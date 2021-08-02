<?php
if (isset($_SESSION['FirstName'])){
    echo ('
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="all-events.php" class="nav-link px-2 link-dark">All Events</a></li>
                <li><a href="all-events.php" class="nav-link px-2 link-dark">All Events</a></li>
            </ul>
        </header>
    ');
}
else{
    echo('
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="all-events.php" class="nav-link px-2 link-dark">All Events</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a class="btn btn-outline-primary me-2" href="login.php">Login</a>
                <a class="btn btn-primary" href="sign-up.php">Sign-up</a>
            </div>
        </header>
    ');
}