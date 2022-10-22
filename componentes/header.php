<?php

if(isset($_SESSION)){
    $saludo = "Bienvenido $session";
    $visible = "";
    
}else {
    $saludo = "";
    $visible = "none";
}
?>
<header class="bg-warning">
    <div>
        <a href="index.php">
            <img class="logo" src="images/logo2.jpeg"/>
        </a>
    </div>
    <div>
        <h1>Bienvenidos a RefuCan</h1>
        <h3>Red de refugios para animales</h3>
    </div>
    <div>
        <form action="logout.php" method="POST">
            <medium><?php echo $saludo; ?></medium>
            <button <?php echo 'style="display: '.$visible.';"' ?> type="submit" name="logout" class="btn btn-light btn-lg">Log Out</button>
        </form>
    </div>
</header>
        