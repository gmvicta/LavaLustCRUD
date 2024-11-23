<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class UserModel extends Model
{
    public function read()
    {
        return $this->db->table('gmv_users')->get_all();
    }

    public function create($lastname, $firstname, $email, $gender, $address)
    {
        $data = array(
            'gmv_last_name' => $lastname,
            'gmv_first_name' => $firstname,
            'gmv_email' => $email,
            'gmv_gender' => $gender,
            'gmv_address' => $address
        );
        return $this->db->table('gmv_users')->insert($data);
    }

    public function get1($id)
    {
        return $this->db->table('gmv_users')->where('id', $id)->get();
    }

    public function update($lastname, $firstname, $email, $gender, $address, $id)
    {
        $data = array(
            'gmv_last_name' => $lastname,
            'gmv_first_name' => $firstname,
            'gmv_email' => $email,
            'gmv_gender' => $gender,
            'gmv_address' => $address
        );
        return $this->db->table('gmv_users')->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->db->table('gmv_users')->where('id', $id)->delete();
    }
}
