<?php

    include "backend/const.php";
    include "backend/Classes/Alerts.php";

    use Alerts\AlertsHandler;
       
    $ok = new AlertsHandler($_GET);
    echo $ok->Render();

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