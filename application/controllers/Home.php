<?php
defined('BASEPATH') OR exit('does not exist');

class Home extends CI_Controller{
    public function index(){ 
        $this->load->helper('loged');
        if( ! is_logged_in()){
            redirect(base_url().'login');
            exit();
        }
        $current_user = get_current_user_();
        if($current_user['user_type']=='student'){
            redirect_to_correct_path($current_user['user_type']);
            exit();
        }
        if($current_user['user_type']=='staff'){
            redirect_to_correct_path($current_user['user_type']);
            exit();
        }
        // $current_user = get_current_user_();
    $this->load->model('User');
    $student_count = $this->User->countdata('student');
    $staff_count = $this->User->countdata('staff');
    $current_user = get_current_user_();
    $this->load->view('header',$current_user);
    $data= array(
        'staff_count'=>$staff_count,
        'student_count'=>$student_count,
        'current_user'=>$current_user
    );
    // echo $user_count;
    $this->load->view('dashboard',$data);
    $this->load->view('footer');
        
    }
    
}