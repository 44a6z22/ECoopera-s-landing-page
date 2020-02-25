<?php
    include "backend/const.php";
    include "backend/Classes/Alerts.php";
    
    use backend\Classes\Alerts\AlertsHandler;
    
    // create an AlertHandler Object 
    $alert = new AlertsHandler($_GET);
    
    // then renders what ever AlertType got selected.
    $alert->Render();
    
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