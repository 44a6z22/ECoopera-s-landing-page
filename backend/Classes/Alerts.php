<?php

namespace Alerts {

// include "const.php";

    use Consts\Errors;
    // use Consts\ErrorsReditictions;
   
    interface IAlertTrigger
    {
        public function Render();
    }

    class AlertNone implements IAlertTrigger
    {

        public function Render()
        {
            return ;
        }
    }

    class AlertSuccess implements IAlertTrigger
    {

        private $message;
        public function __construct($none)
        {
            $this->message = $none;
        }
        public function Render()
        {
            return 
            " <div class='alert alert-success' id='thisAlert' role='alert'>
                $this->message
            </div>
            "
        ;
        }
    }


    class AlertDanger implements IAlertTrigger
    {


        private $message;
        public function __construct($none)
        {
            $this->message = $none;
        }

        public function Render()
        {
            return
            "<div class='alert alert-danger' id='thisAlert' role='alert'>
                $this->message
            </div>";
        }
    }



    class AlertsHandler{
        
        private $alert; 
       
        public function __construct($alertType){

            if(isset($alertType["Error"]))
            {
                $this->alert = new AlertDanger(Errors::$MESSAGES_ARRAY[$alertType["Error"]]);
            }
            else if (isset($alertType["Success"])) 
            {
                $this->alert = new AlertSuccess(Errors::$MESSAGES_ARRAY[$alertType["Success"]]);
            }
            else
            {
                $this->alert = new AlertNone();
            }
        }
        public function Render(){
            return $this->alert->Render();
        }
    }
}
