<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Change_password extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Change Password';
        $this->load->view('layout/user/header', $data);
        $this->load->view('change_password', $data);
        $this->load->view('layout/user/footer');
    }

    public function process() {
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');

        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');

        if ($this->form_validation->run() != FALSE) {
            $user_id = $this->session->userdata('id_user');
            $hashed_password = md5($new_password); // Enkripsi password dengan MD5
            $data = array('password' => $hashed_password);
            $id = array('id_user' => $user_id);

            $this->load->model('user_model');
            if ($this->user_model->update('user', $data, $id)) {
                redirect('welcome');
            } else {
                // Gagal memperbarui password
                echo "Gagal memperbarui password.";
            }
        } else {
            // Validasi form gagal
            $data['title'] = 'Change Password';
            $this->load->view('layout/user/header', $data);
            $this->load->view('change_password', $data);
            $this->load->view('layout/user/footer');
        }
    }
}
