<?php
    namespace App\Helpers;

    class Alert
    {
        private $message = "";
        public function __construct($message=null)
        {
            $this->message = $message;
        }

    }
?>