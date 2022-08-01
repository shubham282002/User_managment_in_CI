<?php
defined('BASEPATH') OR exit('direct access are not allowed');

class Staff extends CI_Controller{

    function staff_screen(){
        $this->load->helper('loged');
        if( ! is_logged_in()){
            redirect(base_url().'login');
            exit();
        }
        $current_user = get_current_user_();
        // print_r($current_user);die;
        if( $current_user['user_type'] == 'student' ){
            redirect_to_correct_path($current_user['user_type']);
            exit();
        }
        $this->load->model('User');
        $users =  $this->User->get_data('staff');
        $data = array();
        $data['users_data'] = $users;
        $data['current_user']=$current_user;
        $this->load->view('header', $current_user);
        $this->load->view('staff_page',$data);
        $this->load->view('footer');
    }
    function delete($userId){
        $this->load->model('User');
        $this->load->helper(array('form', 'url'));
        $user= $this->User->deleteUser($userId);  
        redirect(base_url().'staff/staff_screen');
    }
}