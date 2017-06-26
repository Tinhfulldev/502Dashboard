<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

/* Creaete class for login */
class Login extends CI_Controller {
				public function __construct() {
							parent::__construct();
							$this->load->helper(array('form', 'url'));
					    $this->load->library('form_validation');
						//	$this->load->library('session');
						//	$this->load->helper('security');
						//	$this->load->helper('directory');
							$this->load->model('Login_auth_db');
							$this->load->model('Companies_db');
							$this->load->library('session');
				}

				public function index() {
							$this->load->view('login1');
				}

				/* login auth process */
				public function login_auth() {

							// set validation rules
							$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
							$this->form_validation->set_rules('password', 'Password', 'required');

									if ($this->form_validation->run() == false) {

													// when user already login
											if (isset($this->session->userdata['user_data_session'])){
														$username = ($this->session->userdata['user_data_session']['name']);

														//getting user information
														$user_data = $this->Login_auth_db->get_user_data($username);
														$user_detail = array(
															'name'	=> $user_data['name'],
															'username'	=> $user_data['username'],
															'level'	=> $user_data['level'],
															'status'	=> $user_data['status']
														);
														//store in session
														$this->session->set_userdata('user_data_session', $user_detail);
														$this->session->set_userdata('logged_in', true);

														// user login ok
														$data_to_view['selected'] = 'dashboard';
														$data_to_view['content'] = 'dashboard';
														$data_to_view['companies'] = $this->Companies_db->get_wa_companies();
														$this->load->view('dashboard', $data_to_view);
											}
											else{
														// validation not ok, send validation errors to the view
														$this->load->view('login');
											}

									} else {
										// set variables from the form
										$username = $this->input->post('username');
										$password = $this->input->post('password');

										//user confirm
										if ($this->Login_auth_db->login($username, $password)) {
													//getting user information
													$user_data = $this->Login_auth_db->get_user_data($username);
													$user_detail = array(
														'name'	=> $user_data['name'],
														'username'	=> $user_data['username'],
														'level'	=> $user_data['level'],
														'status'	=> $user_data['status']
													);

													//store in sesstion
													$this->session->set_userdata('user_data_session', $user_detail);
													$this->session->set_userdata('logged_in', true);

													// user login ok
													$data_to_view['selected'] = 'dashboard';
													$data_to_view['content'] = 'dashboard';
													$data_to_view['companies'] = $this->Companies_db->get_wa_companies();
													$this->load->view('dashboard', $data_to_view);
										} else {
											// login failed
											$data1['error'] = 'Wrong username or password.';
											// send error to the view
											$this->load->view('login', $data1);

										}

									}

								}

					public function home() {
						$data['content'] = 'dashboard';
						$this->load->view('dashboard', $data);
					}

					public function login1(){
						$this->load->view('main');

					}

}
