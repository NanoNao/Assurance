<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
    
    public function __construct()

    {

        parent::__construct();
        $this->load->database();
        $this->load->helper('assets');
        $this->load->model('station');
        
        $this->load->library('session');

    }
    
    public function Index()
    {
        $this->Home();
    }

	public function Home()
    {      
        $data = array();
		$data['sta'] = $this->station->getAll();
        $this->load->view('header');
		$this->load->view('back/Home',$data);
	}
}
