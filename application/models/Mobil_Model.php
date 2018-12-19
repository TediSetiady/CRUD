<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mobil_Model extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function view(){
    return $this->db->get('mobil')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('mobil')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_id', 'Id', 'required|max_length[10]');
    
    $this->form_validation->set_rules('input_namapemilik', 'Nama Pemilik', 'required|max_length[20]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_merk', 'Merk', 'required|max_length[20]');
    $this->form_validation->set_rules('input_type', 'Type', 'required|max_length[20]');
  
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "nama_pemilik" => $this->input->post('input_namapemilik'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "merk" => $this->input->post('input_merk'),
      "type" => $this->input->post('input_type'),
      
    );
    
    $this->db->insert('mobil', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($id){
    $data = array(
      "id" => $this->input->post('input_id'),
      "nama_pemilik" => $this->input->post('input_namapemilik'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "merk" => $this->input->post('input_merk'),
      "type" => $this->input->post('input_type'),
     
    );
    
    $this->db->where('id', $id);
    $this->db->update('mobil', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('mobil'); // Untuk mengeksekusi perintah delete data
  }
}