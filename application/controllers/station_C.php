<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Station_C extends CI_Controller {
    
    public function __construct()

    {

        parent::__construct();
        $this->load->database();
        $this->load->helper('assets');
        $this->load->model('station');
         $this->load->view('header');

    }
    
    public function view($data ='NULL')
    {
       echo $data;
    }

}
