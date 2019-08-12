<?php
	class Model_users extends CI_Model{
	   
    public function add_users(){
            $arr=array(
            'id'=>'',
            'login'=>$this->input->post('login'),
            'password'=>$this->input->post('password1'));
            $g=$this->db->insert('users', $arr);
            if ($g){
                return true;
            }
            else {
                return false;
            }
       }
       public function add_admin(){
        $today = date("Y-m-d");
        $arr=array(
        'id'=>'',
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone'),
        'text'=>$this->input->post('message2'),
        'date'=>$today);
        $l=$this->db->insert('zacaz', $arr);
        
       }
       
       public function zacaz(){
               // $this->db->where('id',$id);
                $g=$this->db->get('zacaz');
                return $g;
            }
    public function get_users(){
        
        $this->db->where('login', $this->input->post('login'));
        $this->db->where('password', $this->input->post('password1'));
        $a=$this->db->get('users');
        if ($a->num_rows()==1){
            return true;
        }
        else{
            return false;
        } 
        
       }
       
       

       
       
       
	
}