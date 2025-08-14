<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>



<nav>

    <img src="images/LogoFav192x192.png" style="max-height: 50px; max-width:50px;" alt="">


    <div class="Nav-links">
        <div class="grouped-Nav-links">
            <a class="<?= $current_page === 'home.php' ? 'active' : '' ?>" href="home.php">Dashboard</a>
            <a class="<?= $current_page === 'qikcalculation.php' ? 'active' : '' ?>" href="qikcalculation.php">Qik Calculation</i></a>
        </div>

        <a class="<?= $current_page === 'user.php' ? 'active' : '' ?>" href="user.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></a>
    </div>


</nav>