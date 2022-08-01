<?php
if ( ! function_exists('is_logged_in')){

    function is_logged_in($user_id = null){
        $ci =& get_instance();
        
        if( empty($user_id) ){
            return $ci->session->has_userdata('user_id');
        }

        if( !empty($user_id) && !$ci->session->has_userdata('user_id') ){
            return false;
        }

        /*if( !empty($user_id) && $ci->session->has_userdata('user_id') ){
            // old way to get data $ci->session->userdata('user_id')
            return ($ci->session->user_id == $user_id);
        }*/
    } 
}

if ( ! function_exists('get_current_user_')){
    function get_current_user_(){
        $ci =& get_instance();
        
        if(is_logged_in()){
            return $_SESSION['user_id']; 
        }else{
            return [];
        }
    }
}

if ( ! function_exists('logout')){
    function logout(){  
        //removing session  
        $this->session->unset_userdata('user_id');  
        session_destroy();
        redirect(base_url().'Login');  
    }   
}

if( !function_exists('redirect_to_correct_path')){
    function redirect_to_correct_path($type){
        if( $type == 'student'){
            redirect(base_url().'student/student_screen');
        }
        if( $type == 'staff'){
            redirect(base_url().'staff/staff_screen');
        }
        if( $type == 'admin'){
            redirect(base_url());
        } 
    }
}

