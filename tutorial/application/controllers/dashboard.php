<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
	{
		$this->load->model('queries');
		$records = $this->queries->getPost();
		$this->load->view('dashboard',['records'=> $records]);
	}

	public function addPost(){
		$userid= $this->session->userdata('user_id');
		if(!$userid){
			return redirect('Welcome');
		}
		$this->load->view('addPost');
	}

	public function publishPost(){
		$config = [
			'upload_path' => './uploads', 
			'allowed_types' => 'gif|jpg|png|jpeg',
		];
		$this->load->library('upload', $config);
		$this->form_validation->set_rules('post_title', 'title', 'required');
		$this->form_validation->set_rules('post_description', 'description', 'required');
		$this->form_validation->set_error_delimiters('<div class = "text_danger">','</div>');
		if($this->form_validation->run() && $this->upload->do_upload()){
			// if($this->form_validation->run()){
			$data = $this->input->post();
			$info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info[file_ext]);
			$data['post_image']= $image_path;
			unset($data['submit']);
			$this->load->model('queries');
				if(	$this->queries->insertPost($data)){
					$this->session->set_flashdata('response', 'Post publish successfully');
				}
				else{
					$this->session->set_flashdata('response', 'Post publish failed');
				}
				return redirect('dashboard');

		}
		else{
			$this->addPost();
		}
	}

	public function post($postid){
		$this->load->model('queries');
		$posts = $this->queries->getSinglePost($postid);
		$this->load->view('post',['posts'=> $posts]);
	}

	public function editPost($postid){
		$this->load->model('queries');
		$posts = $this->queries->getSinglePost($postid);
		$this->load->view('editPost',['posts'=> $posts]);
	} 

	public function updatePost($postid){
		$config = [
			'upload_path' => './uploads', 
			'allowed_types' => 'gif|jpg|png|jpeg',
		];
		$this->load->library('upload', $config);
		$this->form_validation->set_rules('post_title', 'title', 'required');
		$this->form_validation->set_rules('post_description', 'description', 'required');
		$this->form_validation->set_error_delimiters('<div class = "text_danger">','</div>');
		if($this->form_validation->run() && $this->upload->do_upload()){
			// if($this->form_validation->run()){
			$data = $this->input->post();
			$info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info[file_ext]);
			$data['post_image']= $image_path;
			unset($data['submit']);
			$this->load->model('queries');
				if(	$this->queries->updateThePost($data, $postid)){
					$this->session->set_flashdata('response', 'Post updated successfully');
				}
				else{
					$this->session->set_flashdata('response', 'Post update failed');
				}
				return redirect('dashboard');

		}
		else{
			$this->editPost();
		}
	}

	public function deletePost($postid){
		$this->load->model('queries');
		if(	$this->queries->deleteThePost($postid)){
			$this->session->set_flashdata('response', 'Post deleted successfully');
		}
		else{
			$this->session->set_flashdata('response', 'Failed to delete post');
		}
		return redirect('dashboard');
	}

}
?>