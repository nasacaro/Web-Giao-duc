<?php
class Site extends CI_Controller 
{
	function index()
	{
		$data = array();
		
		if($query = $this->site_model->get_records())
		{
			$data['records'] = $query;
		}
		
		$this->load->view('options_view', $data);
	}
	
	function create()
	{
		$data = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content')
		);
		
		$this->site_model->add_record($data);
		redirect();
	}
	
	function update()
	{
		if($this->input->post('submit'))
		{
			$id = $this->input->post('id');
			$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content')
			);	
			if($this->site_model->update_record($id, $data)) {
				$query = $this->site_model->get_record_by_id($id);
				$data['record'] = $query;
				$this->load->view('confirm',$data);
			} 
			else 
			{
				$data = array();
				$this->load->view('confirm', $data);	
			}
			
		} 
		else
		{
			
			$id = $this->uri->segment(3);
			$data = array();
			if($query = $this->site_model->get_record_by_id($id))
			{
				$data['record'] = $query;
			}
			$this->load->view('update_form', $data);
			
		}
	}
	
	function delete()
	{
		$this->site_model->delete_row();
		redirect();
	}
}