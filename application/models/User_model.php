<?php
	class User_model extends CI_Model{
		
		public function __construct(){
			parent ::__construct();
			$this->load->database();
		}

		
		public function register($enc_password){
			$data = array(
				'username' => $this->input->post('username'),
                'password' => $enc_password
			);

			return $this->db->insert('users',$data);
		}

		public function booking($username){
			$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'username' => $username,
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'doc' => $this->input->post('doc'),
                'expiry' => $this->input->post('expiry'),
                'birth' => $this->input->post('birth'),
                'from' => $this->uri->segment(4),
                'to' => $this->uri->segment(5),
                'price' => $this->uri->segment(3)+100
			);

			return $this->db->insert('booking', $data);
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->username;
			} else {
				return false;
			}
		}

		public function oneway(){
			$query = $this->db->get('trip'); 
			return $query;
		}

		public function get_from(){
			$this->db->order_by('from');
			$query = $this->db->get('trip');
			return $query->result_array();
		}

		public function get_to(){
			$this->db->order_by('to');
			$query = $this->db->get('trip');
			return $query->result_array();
		}

		public function complete(){

			$this->db->select("*");
			$this->db->from("booking");
			$this->db->limit(1);
			$this->db->order_by('bookingID',"DESC");
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}

		public function view_profile($username){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}

		public function edit_profile($username){
			
			$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'username' => $username,
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone')
			);

			$this->db->where('username', $username);
			return $this->db->update('users', $data);

		}

		public function history($username){
			$this->db->select('*');
			$this->db->from('booking');
			$this->db->where('username',$username);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
	}