<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//sudah
	function __construct(){
		parent::__construct();
		$this->load->model('db_perpus');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('user_v');
	}
	public function cari_u()
	{
		$data2['cari'] = $this->db_perpus->cariTest();
        $this->load->view('user_v1', $data2);
	}
	//sudah
	private function get_data_buku()
	{
		$this->load->model('db_perpus');
		$result = $this->db_perpus->get_Buku();
		return $result;
	}
	//sudah
	public function tambah_aksi(){
		//$this->load->view('view_buku');
		$judul = $this->input->post('judul1');		
		$pengarang = $this->input->post('pengarang');	
		$penerbit = $this->input->post('penerbit');
		$kategori = $this->input->post('kategori');
		$rak = $this->input->post('rak');

		$data =array(
			'judul' =>$judul,
			'pengarang' =>$pengarang,
			'penerbit' =>$penerbit,
			'kategori' =>$kategori,
			'rak' =>$rak);
		$this->db_perpus->input_data($data,'data_buku');
		redirect('Welcome/adminpage');
	}
	function tambah()
	{
		$this->cek_login();
		$this->load->view('form_tambah_buku');
	}
	//sudah
	function hapus($id){
		$where = array('id_buku' => $id);
		$this->db_perpus->delete_data($where,'data_buku');
		redirect('Welcome/adminpage');
	}
	//sudah
	function edit($id){
		$where = array('id_buku' => $id);
		$data['data_buku']= $this->db_perpus->edit_data($where, 'data_buku')->result();
		$this->load->view('form_update_buku',$data);

	}
	//sudah
	function update()
	{	$this->cek_login();
		$id_buku = $this->input->post('id_buku');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$kategori = $this->input->post('kategori');
		$rak = $this->input->post('rak');

		$data =array(
			'judul' =>$judul,
			'pengarang' =>$pengarang,
			'penerbit' =>$penerbit,
			'kategori' =>$kategori,
			'rak' =>$rak);
		$where = array('id_buku' =>$id_buku);

		$this->db_perpus->update_data($where,$data,'data_buku');
	redirect('Welcome/adminpage');
	}
	 //belum
    public function hasil()
    {	
    	$this->cek_login();	
        $data2['cari'] = $this->db_perpus->cariTest();
        $this->load->view('form_search_buku', $data2);
    	 
    }
    function admin()
    {
		$data['title'] = 'code igniter';
    	$this->load->view('login.php',$data);
    }
    function login_validation()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('username','Username','required');
    	$this->form_validation->set_rules('password','Password','required');
    	if ($this->form_validation->run())
    	{
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$this->load->model('db_perpus');
    		 if($this->db_perpus->can_login($username, $password))
    		{
    			$session_data = array('username' => $username);
    			$this->session->set_userdata($session_data);
    			redirect('Welcome/adminpage');
    		}
    		else 
    		{
    			$this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect('welcome/admin');
    		}

    	}
    else{
    	$this->admin();
    }
    }
    public function cek_login() 
    {
 		if($this->session->userdata('username') == '') 
 		{
 			$this->session->set_flashdata('sukses','Anda belum login');

 			redirect(base_url('index.php/welcome/admin'));
 		}

	 }
	 
    public function adminpage()
	{
			
		$this->cek_login();
		$data['data_buku']= $this->get_data_buku()->result();
		//$this->db_perpus->insert_into_database()salah
		$data['data_buku']= $this->get_data_buku()->result();
		//$this->load->view('view_buku',$data);salah
		$this->load->view('welcome_message',$data);
		}
	//sudah
    function logout()
    {	
    	$this->session->unset_userdata('username');
    	redirect('welcome/admin');
    }
}
