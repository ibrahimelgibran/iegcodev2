<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function elektronik()
	{
		$data['title'] = 'Elektronik Categories';
		$data['elektronik'] = $this->model_kategori->elektronik()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('electronic', $data);
		$this->load->view('layout/home/footer');
	}

	public function shirt()
	{
		$data['title'] = 'Shirt Categories';
		$data['shirt'] = $this->model_kategori->shirt()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('shirt', $data);
		$this->load->view('layout/home/footer');
	}

	public function ticket()
	{
		$data['title'] = 'Ticket Categories';
		$data['ticket'] = $this->model_kategori->ticket()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('ticket', $data);
		$this->load->view('layout/home/footer');
	}

	public function shoes()
	{
		$data['title'] = 'Shoes Categories';
		$data['shoes'] = $this->model_kategori->shoes()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('shoes', $data);
		$this->load->view('layout/home/footer');
	}

	public function jacket()
	{
		$data['title'] = 'Jacket Categories';
		$data['jacket'] = $this->model_kategori->jacket()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('jacket', $data);
		$this->load->view('layout/home/footer');
	}

	public function kids()
	{
		$data['title'] = 'Kids Categories';
		$data['kids'] = $this->model_kategori->kids()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('kids', $data);
		$this->load->view('layout/home/footer');
	}

	public function fashion()
	{
		$data['title'] = 'Fashion Categories';
		$data['fashion'] = $this->model_kategori->fashion()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('fashion', $data);
		$this->load->view('layout/home/footer');
	}
	public function project()
	{
		$data['title'] = 'Projct Categories';
		$data['project'] = $this->model_kategori->project()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('project', $data);
		$this->load->view('layout/home/footer');
	}
	public function jasa()
	{
		$data['title'] = 'Jasa Categories';
		$data['jasa'] = $this->model_kategori->jasa()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('jasa', $data);
		$this->load->view('layout/home/footer');
	}
}
