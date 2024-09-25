<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class user_control extends Controller
{
    public function read()
    {
        $data['user'] = $this->user_model->read();
        $this->call->view('user/read', $data);

        $this->call->view('user/read');
    }
    public function create()
    {
        if ($this->form_validation->submitted()) {

            $lastname = $this->io->post('lname');
            $firstname = $this->io->post('fname');
            $email = $this->io->post('email');
            $gender = $this->io->post('gender');
            $address = $this->io->post('address');

            if ($this->user_model->create($lastname, $firstname, $email, $gender, $address)) {
                redirect('user/read');
            } else {
                redirect('user/read');
            }
        }

        $this->call->view('user/create');
    }
    public function update($id)
    {
        if ($this->form_validation->submitted()) {

            $lastname = $this->io->post('lname');
            $firstname = $this->io->post('fname');
            $email = $this->io->post('email');
            $gender = $this->io->post('gender');
            $address = $this->io->post('address');

            if ($this->user_model->update($lastname, $firstname, $email, $gender, $address, $id)) {
                redirect('user/read');
            } else {
                redirect('user/read');
            }
        }
        $data['user'] = $this->user_model->get1($id);
        $this->call->view('user/update', $data);
    }

    public function delete($id)
    {
        if ($this->user_model->delete($id)) {
            redirect('user/read');
        } else {
            redirect('user/read');
        }
    }
}
