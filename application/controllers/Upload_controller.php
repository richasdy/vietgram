<?php

class Upload_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function uploadPost(){
        $caption = $this->input->post('caption');
        $username = $this->session->userdata('username');
        $data =[];
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '100';
        $config['max_width']            = '128';
        $config['max_height']           = '128';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file-upload')) {
            echo json_encode("failed");
        } else {
            $data =  $this->upload->data();
            $path = base_url().'upload/'.$data['file_name'];
            $res = $this->M_User->uploadPost($caption,$path,$username);
            if($res){
                echo json_encode("success");
            } else {
                echo json_encode("failed");
            }
        }
    }
}