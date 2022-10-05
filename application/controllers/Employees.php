<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employees_model', 'M_employees');
	}

	public function index()
	{
		$data['page_data'] = array(
			'title' => 'Employees',
			'styles_path' => array(
				'custom/employees/index',
			),
			'scripts_path' => array(
				'custom/employees/index',
			),
		);
		$this->load->view('layouts/header', $data);
		$this->load->view('employees/index', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function form() {
		$post_data = $this->input->post();

		if ($post_data) {
			$employee_data = array(
				'name' => $post_data['add_name'],
				'position' => $post_data['add_position'],
				'employee_no' => $post_data['add_employee_no'],
				'dob' => $post_data['add_dob'],
				'sss' => $post_data['add_sss'],
				'philhealth' => $post_data['add_philhealth'],
				'hdmf' => $post_data['add_hdmf'],
				'tin' => $post_data['add_tin'],
				'contact_person' => $post_data['add_contact_person'],
				'address' => $post_data['add_address'],
				'contact_no' => $post_data['add_contact_no'],
				'created_at' => NOW
			);

			$this->M_employees->insert($employee_data);
			$response['status'] = RESULT_SUCCESS;
			$response['message'] = 'Employee data has been successfully inserted.';
			exit(json_encode($response));
		}

		$response['status'] = RESULT_FAILED;
		$response['message'] = 'Failed to execute. Please try again later.';
		exit(json_encode($response));
	}
}
