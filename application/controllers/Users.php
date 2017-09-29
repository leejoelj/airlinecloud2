<?php
	class Users extends CI_Controller{
		// Register user
		public function register(){

			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]');

			if($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register');
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password')); 	
	            $this->user_model->register($enc_password);  
	            redirect('users/login');
			}
		}

		// Log in user
		public function login(){

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login');
				$this->load->view('templates/footer');
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$username = $this->user_model->login($username, $password);

				if($username){
					// Create session
					$user_data = array(
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					redirect('customer/home');
				} else {

					redirect('users/login');
				}		
			}
		}

		// Check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}

		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('username');

			redirect('users/login');
		}
}