<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mobil extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Mobil_Model'); // Load MobilModel ke controller ini
  }
  
  public function index(){
    $data['mobil'] = $this->Mobil_Model->view();
    $this->load->view('mobil/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Mobil_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Mobil_Model->save(); // Panggil fungsi save() yang ada di Mobil_Model.php
        redirect('mobil');
      }
    }
    
    $this->load->view('mobil/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Mobil_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Mobil_Model->edit($id); // Panggil fungsi edit() yang ada di Mobil_Model.php
        redirect('mobil');
      }
    }
    
    $data['mobil'] = $this->Mobil_Model->view_by($id);
    $this->load->view('mobil/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->Mobil_Model->delete($id); // Panggil fungsi delete() yang ada di Mobil_Model.php
    redirect('mobil');
  }
}