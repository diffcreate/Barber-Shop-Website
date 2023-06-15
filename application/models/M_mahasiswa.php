<?php
class M_mahasiswa extends CI_model{
public function data_mahasiswa(){
$query = $this->db->get('mahasiswa');
return $query->result();
}
function Getid($id = '')
{
  return $this->db->get_where('mahasiswa', array('id' => $id))->row();
}
function HapusMahasiswa($id)
{
	$this->db->delete('mahasiswa',array('id' => $id));
}
}
?>
