<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != '2') {
            redirect('welcome');
        }
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user WHERE user.id_user='$id'")->result();
        $data['bill'] = $this->db->query("SELECT * FROM transaction WHERE transaction.id_user='$id' AND status='0' LIMIT 3")->result();

        $this->load->view('layout/user/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('layout/user/footer');
    }

    public function update()
{
    $id = $this->input->post('id_user');
    $nama_user = $this->input->post('nama_user');
    $email = $this->input->post('email');

    // Upload gambar profil jika ada yang diunggah
    if (!empty($_FILES['profile_photo']['name'])) {
        $config['upload_path'] = './uploads/profiles/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB
        $config['file_name'] = 'profile_' . $id;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profile_photo')) {
            $upload_data = $this->upload->data();
            $avatar = $upload_data['file_name'];

            // Hapus foto lama jika ada
            // Lakukan operasi penghapusan foto lama di sini jika diperlukan

            // Update data ke database
            $data['avatar'] = $avatar;

            // Simpan nama file avatar baru ke dalam sesi pengguna
            $this->session->set_userdata('avatar', $avatar);
        } else {
            $error = $this->upload->display_errors();
            echo $error; // Tampilkan pesan error
            return;
        }
    }

    // Update data nama dan email
    $data['nama_user'] = $nama_user;
    $data['email'] = $email;

    $where = array('id_user' => $id);

    $this->model_pembayaran->update('user', $data, $where);
    
    // Tidak perlu melakukan session destroy
    // $this->session->sess_destroy();

    redirect('profile'); // Redirect kembali ke halaman profil
}

}
