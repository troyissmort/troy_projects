<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost//php/welcome.php"><img src="https://drive.google.com/uc?export=view&id=1VLvcl-7i5ghIpJzN8FXKQKoFA_HdZbHZ" alt="Troy Bakes" title="Troy Bakes" style="width: 120px; height:auto; padding-bottom:3px;" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link" href="http://localhost//php/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mailto:221910310050@gitam.in">Contact</a>
                </li>';
            if (!$loggedin) {
             echo '
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost//php/signin.php">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost//php/signup.php">Sign up</a>
                </li>';}
                if ($loggedin) {
                 echo '
                 <li class="nav-item">
                    <a class="nav-link" href="search.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signout.php">Sign out</a>
                </li>'
                ;}
                echo'

            </ul>
        </div>
    </div>
</nav>';
?>