<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class UserController extends Controller
{
    //=== READ ===//
    public function read()
    {
        $data['user'] = $this->UserModel->read();
        $this->call->view('user/read', $data);

        $this->call->view('user/read');
    }

    //=== CREATE ===//
    public function create()
    {
        if ($this->form_validation->submitted()) {

            $lastname = $this->io->post('lname');
            $firstname = $this->io->post('fname');
            $email = $this->io->post('email');
            $gender = $this->io->post('gender');
            $address = $this->io->post('address');

            if ($this->UserModel->create($lastname, $firstname, $email, $gender, $address)) {
                redirect('user/read');
            } else {
                redirect('user/read');
            }
        }

        $this->call->view('user/create');
    }

    //=== UPDATE ===//
    public function update($id)
    {
        if ($this->form_validation->submitted()) {

            $lastname = $this->io->post('lname');
            $firstname = $this->io->post('fname');
            $email = $this->io->post('email');
            $gender = $this->io->post('gender');
            $address = $this->io->post('address');

            if ($this->UserModel->update($lastname, $firstname, $email, $gender, $address, $id)) {
                redirect('user/read');
            } else {
                redirect('user/read');
            }
        }
        $data['user'] = $this->UserModel->get1($id);
        $this->call->view('user/update', $data);
    }

    //=== DELETE ===//
    public function delete($id)
    {
        if ($this->UserModel->delete($id)) {
            redirect('user/read');
        } else {
            redirect('user/read');
        }
    }
}
