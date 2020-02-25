<?php

    namespace backend\Classes\Mails;
    
    /**
     * this class is responsible of mails 
     */
    interface IMail
    {
        /**
         * this method is used to send the email. 
         */
        function Send();
    }

    /**
     * SubscribtionMail is a class that handles what ever routine you want to do to the mail that will be sent to the subscribed clients.
     */
    class SubscribtionMail implements IMail
    {
        const   MESSAGE    = "you have been successfuly subscribed to our news letter we will inform you as soon as our website gets lauched", 
                SUBJECT    = "NOREPLY",
                FROM       = "noreply@e-coopera.com", 
                HEADER     = "From : " . self::FROM;

        private $to ; 

        public function __construct (String $to)
        {
            $this->to       = $to ;
        }

        /**
         * This method from SubscribtionMailis to send email to potential clients.
         * Informing them that they have been successfuly subscribed to the news letter.
         */
        public function Send ()
        {
            return "Sent";
            // return mail($this->to, self::MESSAGE, self::SUBJECT, self::HEADER);
        }

    }

    $email = new SubscribtionMail("hhamdaoui31@gmail.com");
    echo $email->Send(); 

// }

?>