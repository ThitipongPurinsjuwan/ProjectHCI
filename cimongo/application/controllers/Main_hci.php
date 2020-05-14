<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_hci extends CI_Controller {
	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('layout_hci/login_hci');
	}

	public function home()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/4_content');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function edit_sellers()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_edit_sellers');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function order_add()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_order_add');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function order_bill()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_order_bill');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function orderdetail()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_orderdetail');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function orders()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_orders');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function sellers()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_sellers');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function stock()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_stock');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function order_seller()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_order_seller');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function bonus_sellers()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_bonus_seller');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}
}
