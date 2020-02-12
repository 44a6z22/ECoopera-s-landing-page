<?php 

    include "includes/connection.php";
    include "const.php"; 

    if  ( isset( $_POST["notifyMeSubmit"] ) )
    {
       if( !empty( $_POST["email"] ) )
       {
            $query = "INSERT INTO subscribers VALUES(:email);";
            $stmt = $connection->prepare($query);
            $parameters = array(":email" => $_POST['email']);

            // check if the email has been registered successfuly 
            if ($stmt->execute($parameters)) {
            // header();
            header(ErrorsReditictions::$REDIRICTIONS_ARRAY["EMAIL-SENT"]);
            } 
            else 
            {
                // if not go back to the index page with an User friendly Error Message.
                header(ErrorsReditictions::$REDIRICTIONS_ARRAY["EMAIL-NOT-REGISTERED"]);
            }
       }
       else
       {
            header(ErrorsReditictions::$REDIRICTIONS_ARRAY["NOT-SUBMITED"]);
       }
    }
    else 
    {
        header(ErrorsReditictions::$REDIRICTIONS_ARRAY["UNAUTH-PERMITION"]);
    }
