<?php

include "backend/const.php";
if (isset($_GET["Error"])) {
?>

    <div class="alert alert-danger" id="thisAlert" role="alert">
        <?= $placeHolder = Errors::$ERRORS_ARRAY[$_GET["Error"]]; ?>
    </div>
    <script>
        setTimeOut(() => {
            var div = document.querySelector("#thisAlert");
            div.classList.add("display-none");
        }, 20000);
    </script>
<?php
}
?>