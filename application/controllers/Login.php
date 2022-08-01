<?php
defined('BASEPATH') OR  exit('direct_access_not allwoed');
class Login extends CI_Controller{
            
    public function index(){
        $this->load->model('User');
        $this->do_login();
        $this->load->view('loggin');
        // $this->load->helper('loged');
    }

    public function do_login(){
        $user = $this->input->post('l_email');  
        $pass = $this->input->post('l_password');
        // $type = $this->input->post('user_select_check');
        $this->load->model('User');
        $checking = $this->User->get_data_for_login($user,$pass);
        if(!empty($checking)){
            foreach ($checking as $info){
                $this->session->set_userdata(array('user_id'=>$info));
                if( $info['user_type'] == 'student'){
                    redirect(base_url().'student/student_screen');
                }
                if( $info['user_type'] == 'staff'){
                    redirect(base_url().'staff/staff_screen');
                }
                if( $info['user_type'] == 'admin'){
                    redirect(base_url());
                }                
            }
        }                    
        else{
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('loggin', $data);  
        }        
    } 
    public function logout()  
    {  
        $this->session->unset_userdata('user_id');  
        redirect(base_url().'Login');  
    }  
}
