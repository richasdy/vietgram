<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_photo extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_profile');
		$this->load->model('M_photo');
	}

	public function index()
	{
        $data['title'] = 'Upload | Vietgram';
        $user = $this->session->userdata('user');
        $data['profile'] = $this->M_profile->getProfile($user['username']);
        $data['photo'] = $this->M_photo->getPhoto($user['username']);
       
        $this->load->view('templates/header',$data);
		$this->load->view('upload-photo',$data);
		$this->load->view('templates/footer');
	}

    public function do_upload()
    {
        $user = $this->session->userdata('user');
        $new_name = 'feed_'.$user['username'];      //custom uploaded file name initialize

        $config['upload_path'] = './assets/images/';      
        $config['allowed_types'] = ['png','jpg','gif','jpeg'];   
        $config['max_size'] = 0;                
        $config['max_width'] = 0;                   
        $config['max_height'] = 0;
        $config['file_name'] = $new_name;           //custom uploaded file name put

        //load and initialize upload config
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile')) {  //if upload failed 
            $this->session->set_flashdata('flash',$this->upload->display_errors());
            redirect('upload_photo',$data);
        } else {
            $upload_data = $this->upload->data();     //Returns array of containing all of the data related to the file uploaded.
            $file_name = $upload_data['file_name'];
            $data = array(
                'photo_name' => $file_name,
                'username' => $user['username'],
                'likes' => 0,
                'comment' => 0,
                'caption' => $this->input->post('caption'),
                'location' => $this->input->post('location')
            );

            $this->M_photo->uploadPhoto($data);
            $this->session->set_flashdata('upload_success','Photo uploaded');
            redirect('profile');
        }

    }
		
	
}
