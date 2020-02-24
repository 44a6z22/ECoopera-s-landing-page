<?php
    namespace Consts{

        class Errors
        {
            const        MESSAGES_ARRAY   =   array(
    
                "EMAIL-NOT-REGISTERED"  => "Your Email didn't register to our database due to some unknown reasons, please try again later",
                "NOT-SUBMITED"          => "Can't leave this Input Empty.",
                "UNAUTH-PERMITION"      => "you do not have the right to go to that page",
                "EMAIL-SENT"            => "your Email has been add Successfuly"
            );
        }
        class ErrorsReditictions
        {
            const       REDIRICTIONS_ARRAY     =       array(
    
                "EMAIL-NOT-REGISTERED"  => "location:../?Error=EMAIL-NOT-REGISTERED",
                "NOT-SUBMITED"          => "location:../?Error=NOT-SUBMITED",
                "UNAUTH-PERMITION"      => "location:../?Error=UNAUTH-PERMITION",
                "EMAIL-SENT"            => "location:../?Success=EMAIL-SENT"
    
            );
        }
    }
   
?>