<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        $this->load->view('Login');
        $this->load->view('Footer');
     
    }
    public function login()
    {
        $username =  $this->input->post('usertxt');
        $pass =  $this->input->post('passtxt'); 

<<<<<<< HEAD
        $this->db->where('username', $username);
=======
        $this->db->where('email', $user);
>>>>>>> a0da86edf2ab5e870da637eb6c221515f95325b7
        $this->db->where('password', $pass);
        $user = $this->db->get('users', 1);
        if($user->num_rows() > 0)
        {
            $r = $user->row_array();

            

            /*echo '<br>';
            print_r($_SESSION);*/
            //$test = json_decode([$sess]);
            echo '<script language="javascript">';
            echo 'alert("ไอหมอนี่มันมีรหัสเว้ยไอห่า")';
            echo '</script>';
            
            /*echo $test->UserID;
            console.log($test->UserID);
            redirect('/IndexController','refresh');*/
            
        }
        else if($user->num_rows() == 0){
            $this->db->where('email', $username);
            $this->db->where('password', $pass);
            $user = $this->db->get('users',1);
            if($user->num_rows() > 0)
            {
                $r = $user->row_array();

            

                /*echo '<br>';
                print_r($_SESSION);*/
                //$test = json_decode([$sess]);
                echo '<script language="javascript">';
                echo 'alert("ไอหมอนี่มันมีรหัสเว้ยไอห่า")';
                echo '</script>';
            }else
            {
                echo '<script language="javascript">';
                echo 'alert("โง่ไอหน้าหีไม่มีรหัสแล้วเสือกกระแดะเข้า")';
                echo '</script>';
            }
        }else 
        {
            echo '<script language="javascript">';
            echo 'alert("โง่ไอหน้าหีไม่มีรหัสแล้วเสือกกระแดะเข้า")';
            echo '</script>';
        }
        exit;
        
        
        
    }
}

/* End of file TestController.php */
