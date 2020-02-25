<?php 
    include "includes/connection.php";
    include "const.php";
    include "Classes/Mail.php";

    use backend\Consts\ErrorsReditictions;
    use backend\Classes\Mails\SubscribtionMail;

    if  ( isset( $_POST["notifyMeSubmit"] ) )
    {
       if( !empty( $_POST["email"] ) )
       {
            $query = "INSERT INTO subscribers VALUES(:email);";
            $stmt = $connection->prepare($query);
            $parameters = array(":email" => $_POST['email']);

            // check if the email has been registered successfuly 
            if ($stmt->execute($parameters)) 
            {
                // create new email object to send a notification email to the subscriber, 
                // informing them that they have been subscribed successfuly.
                $email = new SubscribtionMail($_POST["email"]); 

                if($email->Send())
                {
                    header(ErrorsReditictions::REDIRICTIONS_ARRAY["EMAIL-SENT"]);
                }
                else
                {
                    header(ErrorsReditictions::REDIRICTIONS_ARRAY["EMAIL-NOT-REGISTERED"]);
                }
            } 
            else 
            {
                // if not go back to the index page with an User friendly Error Message.
                header(ErrorsReditictions::REDIRICTIONS_ARRAY["EMAIL-NOT-REGISTERED"]);
            }
       }
       else
       {
            header(ErrorsReditictions::REDIRICTIONS_ARRAY["NOT-SUBMITED"]);
       }
    }
    else 
    {
        header(ErrorsReditictions::REDIRICTIONS_ARRAY["UNAUTH-PERMITION"]);
    }
