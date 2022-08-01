<?php
defined('BASEPATH') OR exit('direct access are not allowed');

class Student extends CI_Controller{

    function student_screen(){
        
        // $this->load->model('User');
        $this->load->helper('loged');
        
        if( ! is_logged_in()){
            redirect(base_url().'login');
            exit();
        }

        $current_user = get_current_user_();
        $this->load->model('User');
        $users =  $this->User->get_data_student('student');
      
        $data = array();
        $data['users_data'] = $users;
        $data['current_user']=$current_user;
        $this->load->view('header',$current_user);
        $this->load->view('student_page',$data);
        $this->load->view('footer');
    }
    
    public function delete(){
        $userId= $this->uri->segment(3);
        $this->load->model('User');
        $this->load->helper(array('form', 'url'));
        $user= $this->User->deleteUser($userId);
        redirect(base_url().'student/student_screen');
    }

}