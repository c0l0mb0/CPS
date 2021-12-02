<?php

class Controller_main extends Controller
{
    function __construct()
    {
//        echo '<script language="javascript">';
//        echo 'alert("Controller_main__construct")';
//        echo '</script>';
        $this->model = new Model_main();
        parent::__construct();
        //$this->view = new View();
    }

    public function action_index()
    {
//        echo '<script language="javascript">';
//        echo 'alert("Controller_main__action_index")';
//        echo '</script>';
        $data = $this->model->get_data();
        // $this->view->generate('404_view.php','template_view.php');
        $this->view->generate('main_view.twig', array('title' => 'Домашнее задание 5', 'data' => $data));
    }
}