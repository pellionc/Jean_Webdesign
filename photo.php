<?php
require_once 'functions.php';

$titre = $_GET["titre"];

getHeader("$titre", "Description page photo");
?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<h1> <?php echo $titre ?>  </h1>

<?php getFooter(); ?>

