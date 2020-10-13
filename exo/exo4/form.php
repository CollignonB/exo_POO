<?php

    class Form {
        protected string $form;

        public function __construct(string $action){
            $this->form = "<form action='" . $action . "'> ";
        }

        public function setText(string $name){
            $this->form .= "<input type='text' name='". $name . "'></br>";
        }

        public function setSubmit(string $jesaispas, string $name){
            $this->form .= "<input type='submit' value = '" . $name . "'> </form>";
        }

        public function showForm(){
            echo $this->form;
        }
    }