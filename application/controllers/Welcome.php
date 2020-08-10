<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{  if($this->session->userdata('is_logged_in')!=0){
		$this->load->model('product_model');
		$this->data['result']=$this->product_model->get_product();
		$this->data['count']=$this->product_model->count_product();
		
		$this->load->view('welcome',$this->data);
	}
		else{
			$this->load->view('restricted');
		}
	}
	public function login(){
		$this->load->helper('url');
		$result_message=" ";
		$this->load->model('users_model');
		$this->load->library("form_validation");
		$this->form_validation->set_rules('Email','user email','required|trim');
		$this->form_validation->set_rules('Password','user password','required|trim');
		$this->form_validation->set_message('required','%s required');
		if($this->form_validation->run()){
		$user_results=$this->users_model->get_user_by_email($this->input->post('Email'));
		if(!empty($user_results)){
			if($user_results->Password==md5($this->input->post('Password'))){
            $data=array(
			'id'=>$user_results->user_id,
			'email'=>$user_results->Email,
			'name'=>$user_results->Name,
			'is_logged_in'=>1
			);
			$this->session->set_userdata($data);
			redirect('Welcome/index');
			}else{
             $result_message="login Failed";
			}
		}
		else{
		    $result_message="login Failed";	
		}
		}
		$data['result_message']=$result_message;
		$this->load->view('login',$data);

	}
	public function signup(){
		$this->load->helper('url');
		$this->load->library("form_validation");
		$this->form_validation->set_rules('Email','البريد الالكتروني','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('Name','الاسم','required');
		$this->form_validation->set_rules('Password','كلمة السر','required|trim');
		$this->form_validation->set_rules('confirmpassword','تأكيد كلمة السر','required|matches[Password]|trim');
		$this->form_validation->set_message('required','%s required');
		$this->form_validation->set_message('matches','No matches');
		$this->form_validation->set_message('is_unique','Email already Found');
        $this->load->model('users_model');
		$result_message_success=" ";
		$result_message_fail=" ";
		if($this->form_validation->run()){
		$add_result=" ";
		$add_result=$this->users_model->add_user($this->input->post('Name'),$this->input->post('Email'),$this->input->post('Password'));
		if($add_result){
			$result_message_success="Signed Up";
			redirect('Welcome/login');
		}else{
			$result_message_fail="Not Signed Up";	
		}	
		}
		$data['result_message_fail']=$result_message_fail;
		$this->load->view('signup',$data);
	}
	public function sendemail($to,$from,$from_name,$subject,$arrayData,$view){
		$this->load->library('email',array('mailtype'=>'html'));
		$config['charset']='utf-8';
		$config['wordwrap']=TRUE;
		$config['mailtype']='html';
		$this->email->initialize($config);
		$message=$this->load->view('emails/'.$view,$arrayData,TRUE);
		$this->email->from($from,$from_name);
		$this->email->to($to);
		$this->email->message($message);
		$this->email->subject($subject);
		if($this->email->send())
			return true;
		else
			return false;
		
	}
}
