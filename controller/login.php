<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();

		$this->load->helper('url');
	    $this->load->helper('form');


	    $this->load->library('session');

	  }


	public function index()
	{
		$this->load->view('v_login');
	}
  public function logout()
	{
    $this->session->sess_destroy();
		$this->load->view('v_login');
	}
  public function editawal()
	{
    $a = $_GET['NIP'];
    $dat['datanya'] = $a;
		$this->load->view('v_edit2',$dat);
	}
  public function edit()
	{
    $b = $_POST['editan'];
    $a = $_POST['NIP'];
    $arr = $this->session->data;
    // print_r($ar[$a]['user']);
    $arr[$a]['user'] = $b;
    $this->session->set_userdata('data',$arr);
		$this->load->view('v_awal');
	}

  public function proseslogin()
	{

    $arr = array(
            array (
               "user" => 'admin',
               "pass" => 123
            ),

            array (
              "user" => 'asd',
              "pass" => 123
            ),

            array (
              "user" => 'admin',
              "pass" => 'ads'
            )
         );
         $this->session->set_userdata('data',$arr);
$u = 'F';
    foreach($arr as $users) {
    if($users['pass'] == $_POST['password'] && $users['user'] == $_POST['username']){
         $u = 'T';
         // break; //You know the user
       }
    }
    if ($u == 'T') {
      $this->session->set_userdata('data',$arr);
      $this->load->view('v_awal');
    }else {
      $this->load->view('v_login');
    }
	}


}
