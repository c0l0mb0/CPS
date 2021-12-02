<?php
//echo '<script language="javascript">';
//echo 'alert("core controller")';
//echo '</script>';
class Controller {

    public $model;
    public $view;

    function __construct()
    {
//        echo '<script language="javascript">';
//        echo 'alert("Controller__construct")';
//        echo '</script>';
        $this->view = new View();
    }
    function action_index() {


    }
}
