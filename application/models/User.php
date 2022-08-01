<?php

class User extends CI_model{
    function insert_data($user_data){
        $this->db->insert('users_data',$user_data);
    }
    function get_data($type){
       $staff =  $this->db->get_where(
        'users_data',
        array('user_type'=>$type)
    )->result_array();
    return $staff;
    }
    function get_data_student($type){
        $student =  $this->db->get_where(
         'users_data',
         array('user_type'=>$type)
        )->result_array();
        $this->db->delete('users_data', array('userid' => $type));
        return $student;    
     }
     function get_data_for_login($user,$pass){
        $check_data =  $this->db->get_where(
         'users_data',
         array('user_name'=>$user,'user_password'=>$pass)
        )->result_array();
        // $this->db->select('*');
        return $check_data;
     }
     function countdata($type){
       $count = $this->db->where(['user_type'=>$type])->from("users_data")->count_all_results();
       return $count;
     }
     function deleteUser($userId){
        $this->db->where('userid' , $userId);
        $this->db->delete('users_data');
        return $this->db->affected_rows();
      }
}