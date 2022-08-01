<?php
defined('BASEPATH') OR exit('direct access are not allowed');

class Student_staff extends CI_Controller{

    function add(){
        $this->load->helper('loged');
        if( ! is_logged_in()){
            redirect(base_url().'login');
            exit();
        }
        $current_user = get_current_user_();
        if( $current_user['user_type'] == 'student' ){
            redirect_to_correct_path($current_user['user_type']);
            exit();
        }
        $this->load->model('User');
        $this->load->view('header',$current_user);
        $this->load->view('create',$current_user);
        $this->load->view('footer');
        
        
        if(!empty($_POST)){
            $user_data = array();
            $user_data['user_name']=$this->input->post('y_name');
            $user_data['user_email']=$this->input->post('y_email');
            $user_data['user_password']=$this->input->post('y_password');
            $user_data['user_type']=$this->input->post('user_select');
            $this->User->insert_data($user_data);
            $this->session->set_flashdata('success','Record update Success');
        }
        $this->load->view('footer');
    }
}