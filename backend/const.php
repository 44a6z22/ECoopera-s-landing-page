<?php

    class Errors
    {

        public static       $ERRORS_ARRAY   =   array(

            "EMAIL-NOT-REGISTERED" => "Your Email didn't register to our database due to some unknown errors, please try again later",
            "NOT-SUBMITED" => "Can't leave this Input Empty.",
            "UNAUTH-PERMITION" => "you do not have the right to go to that page"
        );
    }
    class ErrorsReditictions
    {
        public static       $REDIRICTIONS_ARRAY      =       array(

            "EMAIL-NOT-REGISTERED" => "location:../?Error=EMAIL-NOT-REGISTERED",
            "NOT-SUBMITED" => "location:../?Error=NOT-SUBMITED",
            "UNAUTH-PERMITION" => "location:../?Error=UNAUTH-PERMITION"

        );
    }
   
?>