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

	public function uiux()
	{
		$data['title'] = 'UI/UX Categories';
		$data['uiux'] = $this->model_kategori->uiux()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('uiux', $data);
		$this->load->view('layout/home/footer');
	}
	public function logo()
	{
		$data['title'] = 'Logo Categories';
		$data['logo'] = $this->model_kategori->logo()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('logo', $data);
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

	public function banner()
	{
		$data['title'] = 'Banner Categories';
		$data['banner'] = $this->model_kategori->banner()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('banner', $data);
		$this->load->view('layout/home/footer');
	}
	public function pulsa()
	{
		$data['title'] = 'Pulsa Categories';
		$data['pulsa'] = $this->model_kategori->pulsa()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('pulsa', $data);
		$this->load->view('layout/home/footer');
	}
	public function topup()
	{
		$data['title'] = 'Topup Game Categories';
		$data['topup'] = $this->model_kategori->topup()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('topup', $data);
		$this->load->view('layout/home/footer');
	}
	public function suntik()
	{
		$data['title'] = 'Suntik Followers Categories';
		$data['suntik'] = $this->model_kategori->suntik()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('suntik', $data);
		$this->load->view('layout/home/footer');
	}

	public function trousers()
	{
		$data['title'] = 'Celana Categories';
		$data['trousers'] = $this->model_kategori->trousers()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('trousers', $data);
		$this->load->view('layout/home/footer');
	}
}
