<?php

include "backend/const.php";
if (isset($_GET["Error"])) {
?>

    <div class="alert alert-danger" id="thisAlert" role="alert">
        <?= $placeHolder = Errors::$ERRORS_ARRAY[$_GET["Error"]]; ?>
    </div>
    <script>
        let danger = document.querySelector('#thisAlert');

        setTimeout(() => {
            danger.style.transition = "1s";
            danger.style.opacity = 0;
        }, 500);
        setTimeout(() => {
            danger.style.display = "none";
        }, 1000);
    </script>
<?php
}
?>