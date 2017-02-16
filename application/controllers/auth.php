<?php



Class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
        $this->load->view('header');
        // Load database
        $this->load->model('login_Model');
    }

    // Show login page
    public function index() {
        $this->register();
    }

    // Show registration page
    public function register() {
        $this->load->view('login/connect');
    }

    // Validate and store registration data in database
    public function new_user_registration() {

        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );
            $result = $this->login_Model->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('registration_form', $data);
            }
        }
    }

    // Check for user login process
    public function user_login_process() {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                redirect('back');
                
            }else{
                $this->load->view('login/connect');
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_Model ->login($data);
            if ($result == TRUE) {

                $username = $this->input->post('username');
                $result = $this->login_Model ->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    redirect('back');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login/connect', $data);
            }
        }
    }


    public function logout() {

        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login/connect', $data);
    }

}

?>