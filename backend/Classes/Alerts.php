<?php

namespace Alerts {

    use Consts\Errors;
    
    interface IAlertTrigger
    {
        public function Render();
    }
    
    // THIS ALERT CLASS IS WHEN THERE IS NO ALERT TO SHOW 
    // SO IT'S RENDER METHOD RETURNS NOTHING 
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
            " 
            <div class='alert alert-success' id='thisAlert' role='alert'>
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
    
    // CREATING A HANDLER CLASS TO CHECK WITH ALERT SHOULD BE DISPLAYER
    class AlertsHandler{
        
        private $alert; 
       
        public function __construct($alertType){

            if(isset($alertType["Error"]))
            {
                $this->alert = new AlertDanger(Errors::MESSAGES_ARRAY[$alertType["Error"]]);
            }
            else if (isset($alertType["Success"])) 
            {
                $this->alert = new AlertSuccess(Errors::MESSAGES_ARRAY[$alertType["Success"]]);
            }
            else
            {
                $this->alert = new AlertNone();
            }
        }
        // RENDERS WHATEVER ALERT GOT PICKED
        public function Render(){
            echo $this->alert->Render();
        }
    }
}
