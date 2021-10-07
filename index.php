<?php
    $badWord="santo";
    $paragraph="marco giovanni filippo gatto cane ";
?>
<h1>
    <form method="get">
        <input type="text" name="badWord" placeholder="ciao">
        <input type="submit" value="ciao">
    </form>
    <?php 
        echo str_replace($_GET["badWord"],"***",$paragraph);
        echo strlen($paragraph);
    ?>
</h1>