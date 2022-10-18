<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employees_model', 'M_employees');

		$this->_create_additional = array(
			'created_by' => 1,
			'created_at' => NOW
		);

		$this->_update_additional = array(
			'updated_by' => 1,
			'updated_at' => NOW
		);

		$this->_delete_additional = array(
			'deleted_by' => 1,
			'deleted_at' => NOW
		);
	}

	public function get($id) {
		$employee = $this->M_employees->get($id);
		exit(json_encode($employee));
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
		$data['employees'] = $employees = $this->M_employees->get_all();
		$this->load->view('layouts/header', $data);
		$this->load->view('employees/index', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function delete() {
		$post_data = $this->input->post();
		if (!$post_data) {
			show_404();
			die();
		}

		$this->M_employees->delete($this->_delete_additional, $post_data['id']);
		$response['status'] = RESULT_SUCCESS;
		$response['message'] = 'Employee data has been successfully deleted.';
		exit(json_encode($response));
	}

	public function form()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$id = isset($post_data['edit_id']) ? $post_data['edit_id'] : null;

			if ($id) {
				$employee_data = array(
						'name' => $post_data['edit_name'],
						'position' => $post_data['edit_position'],
						'employee_no' => $post_data['edit_employee_no'],
						'dob' => $post_data['edit_dob'],
						'sss' => $post_data['edit_sss'],
						'philhealth' => $post_data['edit_philhealth'],
						'hdmf' => $post_data['edit_hdmf'],
						'tin' => $post_data['edit_tin'],
						'contact_person' => $post_data['edit_contact_person'],
						'address' => $post_data['edit_address'],
						'contact_no' => $post_data['edit_contact_no']
					) + $this->_update_additional;

				// Image upload
				if (!empty($_FILES['edit_photo_image']['name'])) {
					$config = array();
					$photo_image_path = 'assets/uploads/employees/photo_images';
					$config['file_name'] = $_FILES['edit_photo_image']['name'];
					$config['upload_path'] = $photo_image_path;
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['max_size'] = '10000000000'; // max_size in kb
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('edit_photo_image')) {
						if (!is_dir($photo_image_path)) {
							//Directory does not exist, so let's create it.
							mkdir($photo_image_path, 0755);
						}
						// Get data about the file
						$upload_data = $this->upload->data();
						$employee_data['photo_img'] = file_get_contents($_FILES['edit_photo_image']['tmp_name']);
						$employee_data['photo_url'] = $upload_data['file_name'];
					}
				}

				// Signature Upload
				if (!empty($_FILES['edit_signature_image']['name'])) {
					$config = array();
					$signature_image_path = 'assets/uploads/employees/signature_images';
					$config['file_name'] = $_FILES['edit_signature_image']['name'];
					$config['upload_path'] = $signature_image_path;
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['max_size'] = '10000000000'; // max_size in kb
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('edit_signature_image')) {

						if (!is_dir($signature_image_path)) {
							//Directory does not exist, so let's create it.
							mkdir($signature_image_path, 0755);
						}
						// Get data about the file
						$upload_data = $this->upload->data();
						$employee_data['signature_img'] = file_get_contents($_FILES['edit_signature_image']['tmp_name']);
						$employee_data['signature_url'] = $upload_data['file_name'];
					}
				}

				$this->M_employees->update($employee_data, $id);
				$response['status'] = RESULT_SUCCESS;
				$response['message'] = 'Employee data has been successfully updated.';
				exit(json_encode($response));
			}
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
					'contact_no' => $post_data['add_contact_no']
				) + $this->_create_additional;
			// Image upload
			if (!empty($_FILES['add_photo_image']['name'])) {
				$config = array();
				$photo_image_path = 'assets/uploads/employees/photo_images';
				$config['file_name'] = $_FILES['add_photo_image']['name'];
				$config['upload_path'] = $photo_image_path;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '10000000000'; // max_size in kb
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('add_photo_image')) {
					if (!is_dir($photo_image_path)) {
						//Directory does not exist, so let's create it.
						mkdir($photo_image_path, 0755);
					}
					// Get data about the file
					$upload_data = $this->upload->data();
					$employee_data['photo_img'] = unpack("H*hex", file_get_contents($photo_image_path . '/' . $upload_data['file_name']));
					$employee_data['photo_url'] = $upload_data['file_name'];
				}
			} else {
				$response['status'] = RESULT_FAILED;
				$response['message'] = 'Failed to upload file.';
				exit(json_encode($response));
			}

			// Signature Upload
			if (!empty($_FILES['add_signature_image']['name'])) {
				$config = array();
				$signature_image_path = 'assets/uploads/employees/signature_images';
				$config['file_name'] = $_FILES['add_signature_image']['name'];
				$config['upload_path'] = $signature_image_path;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '10000000000'; // max_size in kb
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('add_signature_image')) {

					if (!is_dir($signature_image_path)) {
						//Directory does not exist, so let's create it.
						mkdir($signature_image_path, 0755);
					}
					// Get data about the file
					$upload_data = $this->upload->data();
					$employee_data['signature_img'] = unpack("H*hex", file_get_contents($signature_image_path . '/' . $upload_data['file_name']));
					$employee_data['signature_url'] = $upload_data['file_name'];
				}
			} else {
				$response['status'] = RESULT_FAILED;
				$response['message'] = 'Failed to upload file.';
				exit(json_encode($response));
			}

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
