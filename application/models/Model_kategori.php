<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function elektronik()
	{
		return $this->db->get_where('product', array('kategori' => 'Electronic'));
	}

	public function shirt()
	{
		return $this->db->get_where('product', array('kategori' => 'T-Shirt'));
	}
	public function ticket()
	{
		return $this->db->get_where('product', array('kategori' => 'E-Ticket'));
	}
	public function uiux()
	{
		return $this->db->get_where('product', array('kategori' => 'UI/UX'));
	}
	public function logo()
	{
		return $this->db->get_where('product', array('kategori' => 'Logo'));
	}
	public function shoes()
	{
		return $this->db->get_where('product', array('kategori' => 'Shoes'));
	}

	public function jacket()
	{
		return $this->db->get_where('product', array('kategori' => 'Jacket'));
	}

	public function kids()
	{
		return $this->db->get_where('product', array('kategori' => 'Kids & Baby'));
	}

	public function fashion()
	{
		return $this->db->get_where('product', array('kategori' => 'Fashion & Make Up'));
	
	}
	public function project()
	{
		return $this->db->get_where('product', array('kategori' => 'Project'));
	}
	public function jasa()
	{
		return $this->db->get_where('product', array('kategori' => 'Jasa'));
	}

	public function banner()
	{
		return $this->db->get_where('product', array('kategori' => 'Banner'));
	}

	public function pulsa()
	{
		return $this->db->get_where('product', array('kategori' => 'Pulsa'));
	}
	public function topup()
	{
		return $this->db->get_where('product', array('kategori' => 'Topup Game'));
	}
	public function suntik()
	{
		return $this->db->get_where('product', array('kategori' => 'Suntik Followers'));
	}
	public function trousers()
	{
		return $this->db->get_where('product', array('kategori' => 'Celana'));
	}
}
