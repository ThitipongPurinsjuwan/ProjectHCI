<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_hci extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('buyday_model');
	}

	public function index()
	{
		$this->load->view('layout_hci/login_hci');
	}

	public function home()
	{
		$data['sellers_showhomepage'] = $this->buyday_model->findAll_sellers();

		$data['orders'] = $this->buyday_model->findAll_Orders();
		$data['orders_success'] = $this->buyday_model->findAll_Orders(array('order_status' => 'success'));
		$data['orders_unsuccess'] = $this->buyday_model->findAll_Orders(array('order_status' => 'unsuccess'));
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/4_content', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	// ---------------------------------- [ Page  Seller ] ---------------------------------------
	public function edit_sellers($seller_id)
	{
		$condition = array(
			'seller_id' => $seller_id
			// 'categories' => $this->mongo_db->create_document_id($categoriesID)
		);
		$data = array(
			'seller_id' => $seller_id,
			'detail' => $this->buyday_model->findOne_seller($condition)
		);
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_edit_sellers', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}
	public function sellers()
	{
		$data['sellers'] = $this->buyday_model->findAll_sellers();
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_sellers', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}
	public function bonus_sellers()
	{
		$data['sellers'] = $this->buyday_model->findAll_sellers();
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_bonus_seller', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}
	public function update_seller_detail()
	{
		$detail = $this->input->post();
		$name = $detail['seller_firstname'];
		$lastname = $detail['seller_lastname'];
		$phone = $detail['seller_telephone'];
		$address = $detail['seller_address'];
		$seller_id = $detail['seller_id'];

		$this->mongo_db
			->set([
				'seller_firstname' => $name,
				'seller_lastname' => $lastname,
				'phone' => $phone,
				'address' => $address
			])
			->where('seller_id', $seller_id);

		// Updates all BMW cars with M760 model.
		$updateStatus = $this->mongo_db->updateAll('sellers');
		if ($updateStatus == 1) {
			$this->session->set_flashdata('success', 'pass');
			redirect('main_hci/sellers');
		} else {
			$this->session->set_flashdata('false', 'pass');
			redirect('main_hci/sellers');
		}
	}
	public function delete_seller($seller_id)
	{
		$deleteStatus = $this->mongo_db->where('seller_id', $seller_id)->delete('sellers');
		if ($deleteStatus == 1) {
			$this->session->set_flashdata('success_delete', 'pass');
			redirect('main_hci/sellers');
		} else {
			$this->session->set_flashdata('false', 'pass');
			redirect('main_hci/sellers');
		}
	}
	public function add_sellers()
	{
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_add_sellers');
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}
	public function insert_seller()
	{
		$data = $this->input->post();
		$stock = array(
			'seller_id' => $data['seller_id'],
			'seller_firstname' => $data['seller_firstname'],
			'seller_lastname' => $data['seller_lastname'],
			'phone' => $data['seller_telephone'],
			'address' => $data['seller_id'],
			'bonus' => 0,
			'target' => 0,
			'active' => 1,
			'seller_status' => 'success'
		);
		$result = $this->buyday_model->insert_seller($stock);

		if (!empty($result)) {
			$this->session->set_flashdata('success', 'pass');
			redirect('main_hci/sellers');
		} else {
			$this->session->set_flashdata('false', 'pass');
			redirect('main_hci/sellers');
		}
	}



	// ---------------------------------- [ Page Orders ] ---------------------------------------
	public function order_add($firstname, $lastname, $id)
	{
		$condition = array(
			'seller_firstname' => $firstname,
			'seller_lastname' => $lastname
			// 'categories' => $this->mongo_db->create_document_id($categoriesID)
		);
		$data['seller_add'] = $this->buyday_model->findOne_seller($condition);
		$condition2 = array(
			'seller_id' => $id
			// 'categories' => $this->mongo_db->create_document_id($categoriesID)
		);

		$data['seller_order'] = $this->buyday_model->findAll_Orders($condition2);

		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_order_add', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function order_bill($seller_id)
	{
		$data['products'] = $this->buyday_model->findAll_products();
		$data['seller_add'] = $this->buyday_model->findOne_seller(array('seller_id' => $seller_id));
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_order_bill', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function orderdetail($order_id)
	{
		$condition = array(
			'order_id' => $this->mongo_db->create_document_id($order_id)
		);
		$data['orderdetails'] = $this->buyday_model->findAll_Orderdetails($condition);

		$condition2 = array(
			'_id' => $this->mongo_db->create_document_id($order_id)
		);
		$data['order_status'] = $this->buyday_model->findOne_Order($condition2);
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_orderdetail', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function orders()
	{
		$data['order'] = $this->buyday_model->findAll_Orders();
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_orders', $data);
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

	public function add_order()
	{
		$order = $this->input->post();
		print_r("--------- [ ไม่ทันครับบบบ 55555 ] ----------");
		echo "</br></br>";
		print_r($order);
	}







	// ---------------------------------- [ Page Stock ] ---------------------------------------
	public function stock()
	{
		$data['products_stock'] = $this->buyday_model->findAll_products();

		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_stock', $data);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function add_quntity($id, $qun)
	{
		$id_product = array(
			'id' => $id,
			'qun' => $qun
		);
		$this->load->view('layout_hci/1_head');
		$this->load->view('layout_hci/2_left_menu');
		$this->load->view('layout_hci/3_top_bar');
		$this->load->view('layout_hci/content/4_content_add_product_quntity', $id_product);
		$this->load->view('layout_hci/5_footer');
		$this->load->view('layout_hci/6_right_bar');
		$this->load->view('layout_hci/7_foot');
	}

	public function add_quntity_product_stock()
	{
		$quntity = $this->input->post();
		// print_r($quntity);
		$sum = (int) ($quntity['product_quntity_old'] + $quntity['product_add_quntity']);
		$product_id = (int) $quntity['product_id'];

		$updateStatus = $this->mongo_db
			->set('quntity', $sum)
			->where('product_id', $product_id)
			->update('products');

		$this->session->set_flashdata('success', 'pass');
		redirect('main_hci/stock');
	}


	// ---------------------------------- [ Page Users ] ---------------------------------------

	public function check_user()
	{
		$user = $this->input->post();
		$condition = array(
			'user_id' => $user['username'],
			'password' => $user['password']
			// 'order_id' => $this->mongo_db->create_document_id($order_id)
		);
		$key = $this->buyday_model->findOne_user($condition);
		if (!empty($key)) {
			$this->session->set_flashdata('success_login', 'pass');
			redirect('main_hci/home');
		} else {
			$this->session->set_flashdata('false', 'pass');
			redirect('');
		}
	}





	// Operation Function

	public function save()
	{
		$max_id = $this->buyday_model->find_max_product_id();
		$stock = array(
			'product_id' => $max_id['product_id'] + 1,
			'product_name' => $this->input->post('product_name_stock'),
			'unit' => $this->input->post('unit_stock'),
			'price' => $this->input->post('price_stock'),
			'selas' => $this->input->post('price_sales'),
			'quntity' => 0
		);

		$product_check = $this->buyday_model->findAll_products();
		$check_duplicate_name = 0;
		foreach ($product_check as $r) {
			if ($r['product_name'] == $stock['product_name']) {
				$check_duplicate_name = 1;
			}
		}

		if ($check_duplicate_name == 0) {
			$result = $this->buyday_model->insert_product($stock);
			if (!empty($result)) {
				$this->session->set_flashdata('success', 'pass');
					redirect('main_hci/stock');
			} else {
				$this->session->set_flashdata('false_insert_product', 'pass');
				redirect('main_hci/stock');
			}
		} else {
			$this->session->set_flashdata('false_insert_product_name', 'pass');
			redirect('main_hci/stock');
		}
	}
}
