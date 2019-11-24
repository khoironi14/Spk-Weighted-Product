<?php
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
		$this->load->helper(array('Cookie', 'String'));
	}
	function index(){

	 // ambil cookie
        $cookie = get_cookie('stiki');
        
        // cek session
        if ($this->session->userdata('logged')) {
           if ($this->session->userdata('akses')==1) {
					$this->session->set_userdata($session);
					redirect('Admin/home');
				}else{
					$this->session->set_userdata($session);
					redirect('Welcome/staff');

				}
        } else if($cookie <> '') {
            // cek cookie
            $row = $this->Model_login->get_by_cookie($cookie)->row();
            if ($row) {
                $this->_daftarkan_session($row);
            } else {
                $data = array(
                   'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
                     
                     'message' => $this->session->flashdata('message')
                );
                $this->load->view('login',$data);   
            }
        } else {
            $data = array(
                'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
               
                'message' => $this->session->flashdata('message')
            );
           $this->load->view('login',$data);            
        }
	}
	function login(){

	if (isset($_POST['login'])) {
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))


			);
			$row=$this->Model_login->validasi($data)->row();
			if ($row) {
				//foreach ($cek->result() as  $value) {
				//	$id=$value->id_user;
					//$session['logged']=TRUE;
					//$session['nama']=$value->nama_lengkap;
					//$session['userku']=$value->username;
					//$session['akses']=$value->hak_akses;
					//$session['id']=$value->id_user;
				$key = random_string('alnum', 64);
                set_cookie('stiki', $key, 3600*24*30); // set expired 30 hari kedepan
                
                // simpan key di database
                $update_key = array(
                    'cookie' => $key
                );
                $this->Model_login->update($update_key, $row->id_user);
				
				 
                $this->_daftarkan_session($row);
				//$this->session->set_userdata($session);
				$level=$this->session->userdata('akses');
				if ($level==1) {
					$this->session->set_userdata($session);
					redirect('Admin/home');
				}else{
					$this->session->set_userdata($session);
					redirect('Welcome/staff');

				}
				
			}else{

				$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Gagal</h4>
                    <p>Username/Password Salah </p>
                </div>');
                redirect('Admin/login');
			}
		}else{
			
		$this->load->view('login');
		}

	}
	 public function _daftarkan_session($row) {
        // 1. Daftarkan Session
        $sess = array(
            'logged' => TRUE,
            'id' => $row->id_user,
            'userku' => $row->username,
            'akses'=>$row->hak_akses
        );
        $this->session->set_userdata($sess);
    }
	function home(){
		if ($this->session->userdata('akses')==1) {
			# code...
		
$data['content']='home';
$this->load->view('dashboard',$data);
}else{
	redirect('Admin/login');
}
	}
	function staff(){
if ($this->session->userdata('akses')==2) {

		$data['content']='home';
$this->load->view('staff/dashboard',$data);
}else{
redirect('Admin/index');

	}
}
}



?>