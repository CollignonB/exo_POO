<?php

    class Form {
        protected string $form;

        public function __construct(string $action){
            $this->form = "<form action='" . $action . "'> ";
        }

        public function setText(string $name){
            $this->form .= "<input type='text' name='". $name . "'></br>";
        }

        public function setSubmit(string $value, string $name){
            $this->form .= "<input type='submit' value = '" . $value . "' name='" . $name . "'> </form>";
        }

        public function showForm(){
            echo $this->form;
        }
    }