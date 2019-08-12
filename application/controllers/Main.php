<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Main extends CI_Controller{
        
        public function index(){
            $this->start();
        }
        public function start(){
            $this->load->view('index');
        }
        public function login(){
            $this->load->view('login');
        }
        public function reg(){
           $this->load->view('reg');
        }
        public function contract(){
           $this->load->view('contract');
           } 
 
        public function company(){
            $this->load->view('company');
        }  
        public function map(){
            $this->load->view('map');
        } 

        public function contacts(){
            $this->load->view('contacts');
        }

        public function communication(){
            $this->load->view('communication');      
        }
        public function admin(){
            $this->load->model('model_users');
            $date['query']=$this->Model_users->zacaz();
            $this->load->view('admin',$date);
        }

        public function milotpr(){
            mail($this->input->post('email'), "Спасибо что связались с нами","Мы ответим вам в ближайщее время!");
            $pho=$this->input->post ('phone');
            $mail=$this->input->post ('email');
            $mess=$this->input->post ('message2');
            $strr="$pho"."\n"."$mail"."\n"."$mess".'  ';
            mail('comarov.b@yandex.ru', $this->input->post('name'),$strr);
            $this->load->model('model_users');
            $this->model_users->add_admin();
            //print_r($_POST);
            redirect();
        }
        
        public function zacaz(){
            $this->load->model('model_users');
            $data['query']=$this->model_users->zacaz();
            $this->load->view('zacaz',$data);
          } 

         public function login_prover(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('login', 'login','required|callback_errorlogin', array('required'=>'Введите логин'));
            $this->form_validation->set_rules('password1', 'Password1','required',array('required'=>'Введите пароль'));
            if ($this->form_validation->run()){
               $d=array('admin' => $this->input->post('login'), 'id_sess'=> 1);
               $this->session->set_userdata($d);
               //$this->load->view('index');
               redirect('main/admin');
            }
            else{
                $this->load->view('admin');
            }
          }

           public function reg_prover(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login22222','required|trim', array('required'=>'Введите логин'));
        $this->form_validation->set_rules('password1', 'pass1','required',array('required'=>'Введите пароль'));
        $this->form_validation->set_rules('password2', 'pass2','required|matches[password1]',array('required'=>'Введите пароль еще раз', 
                                                                                                    'matches'=>'Пароли не совпадают'));
         //$this->form_validation->set_rules('kap','Капча','required|callback_proverka_capchi', array('reguired'=>'Введите код с картинки'));//проверка капчи
        if ($this->form_validation->run()){
            $this->load->model('model_users');
            if ($this->model_users->add_users()){
              $this->login();
                          }
            else{
               $this->reg();
            }
        }
        else{
            $this->reg();
        }        
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
       
       
                public function errorlogin(){
            $this->load->model('model_users');
            if ($this->model_users->get_users()){
                return true;
                
            }
            else {
                $this->form_validation->set_message('errorlogin','Неверный логин/пароль');
                return false;
            }                     
         }
         
         
       public function  vixod(){
            $this->session->sess_destroy();
             unset($_SESSION['login'],$_SESSION['id_sess']);//уничтожения эдементов сессии
           redirect('main/index');
          //echo 'nmbmmn';
         }
         
       public function  news(){
            $this->load->view('news');
            
         }

}
?>