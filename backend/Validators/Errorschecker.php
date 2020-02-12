<?php

    include "backend/const.php";

    if (isset($_GET["Error"])) 
    {
?>

        <div class="alert alert-danger" id="thisAlert" role="alert">
            <?= $placeHolder = Errors::$ERRORS_ARRAY[$_GET["Error"]]; ?>
        </div>

<?php
    } 
    else if(isset($_GET["Success"])) 
    {
?>
        <div class="alert alert-success" id="thisAlert" role="alert">
            <?= $placeHolder = Errors::$ERRORS_ARRAY[$_GET["Success"]]; ?>
        </div>
<?php
    }
?>
<script>
    let danger = document.querySelector('#thisAlert');

    setTimeout(() => {
        danger.style.transition = "2s";
        danger.style.opacity = 0;
    }, 500);
    setTimeout(() => {
        danger.style.display = "none";
    }, 1000);
</script>