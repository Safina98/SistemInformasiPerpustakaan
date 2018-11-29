<?php

/**
 * 
 */
class db_perpus extends CI_Model
{
	//sudah
	public function get_Buku()
	{
		$query = $this->db->get('data_buku');
		return $query;
	}
	//sudah
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	//sudah
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}
	//sudah
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	//sudah
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function cariTest()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from data_buku where judul like '%$cari%' OR pengarang like '%$cari%' OR kategori like '%$cari%'");
        return $data->result();
    }
	function ambildata($judul, $pengarang, $table) {
		$this->db->where('name =', $judul);
		$this->db->or_where('pengarang =', $pengarang);
		$this->db->get($table); 
	}
	function can_login($username, $password)
	{
		$this->db->where('username',"$username");
		$this->db->where('password',"$password");
		$query = $this->db->get('user');

		if($query->num_rows()>0)
		{
			return true;	
		}
		else
		{
			return false;
		}
	}
}

?>