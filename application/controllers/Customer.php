<?php
	class Customer extends CI_Controller{
		public function home(){	
			$data['from'] = $this->user_model->get_from();
			$data['to'] = $this->user_model->get_to();

			$this->load->view('templates/header');
			$this->load->view('customer/home',$data);
			$this->load->view('templates/footer');
		} 

		public function one(){	
			$data['from'] = $this->user_model->get_from();
			$data['to'] = $this->user_model->get_to();
			$data['show'] = $this->user_model->oneway();

			$this->load->view('templates/header');
			$this->load->view('customer/one',$data);
			$this->load->view('templates/footer');
		}

		public function booking(){
			$username = $this->session->userdata('username');
	        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('customer/booking');
				$this->load->view('templates/footer');
			} else {
	            $this->user_model->booking($username);
	            redirect('customer/complete');
			}
		}

		public function about(){
			$this->load->view('templates/header');
			$this->load->view('customer/about');
			$this->load->view('templates/footer');
		}

		public function checked(){
			$this->load->view('templates/header');
			$this->load->view('customer/checked');
			$this->load->view('templates/footer');
		}

		public function dangerous(){
			$this->load->view('templates/header');
			$this->load->view('customer/dangerous');
			$this->load->view('templates/footer');
		}

		public function hand(){
			$this->load->view('templates/header');
			$this->load->view('customer/hand');
			$this->load->view('templates/footer');
		}

		public function sporting(){
			$this->load->view('templates/header');
			$this->load->view('customer/sporting');
			$this->load->view('templates/footer');
		}

		public function complete(){

			$data['show'] = $this->user_model->complete();

			$this->load->view('templates/header');
			$this->load->view('customer/complete',$data);
			$this->load->view('templates/footer');
		}

		public function profile(){
			$username = $this->session->userdata('username');
			$data['show'] = $this->user_model->view_profile($username);

			$this->load->view('templates/header');
			$this->load->view('customer/profile',$data);
			$this->load->view('templates/footer');

		}

		public function edit_profile(){
			$username = $this->session->userdata('username');
			$data['show'] = $this->user_model->view_profile($username);
			
			$this->form_validation->set_rules('firstname', 'Firstname', 'required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('customer/edit_profile',$data);
				$this->load->view('templates/footer');
			} else {
				$this->user_model->edit_profile($username);
				redirect('customer/profile');
			}

		}

		public function history(){
			$username = $this->session->userdata('username');
			$data['show'] = $this->user_model->history($username);

			$this->load->view('templates/header');
			$this->load->view('customer/history',$data);
			$this->load->view('templates/footer');

		}

	}