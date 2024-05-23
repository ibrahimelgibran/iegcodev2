<?php
class User_model extends CI_Model {
    public function update_password($user_id, $new_password) {
        $hashed_password = md5($new_password); // Menggunakan MD5 untuk enkripsi password
        $data = array('password' => $hashed_password);
        $this->db->where('id_user', $user_id);
        $this->db->update('user', $data);
        return $this->db->affected_rows() > 0;
    }
}
