<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realizacje_podstrona extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists('realizations')){
				$this->base_m->create_table('realizations');
			}
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all('realizations');
			echo loadSubViewsBack('realizacje_podstrona', 'index', $data);
		} else {
			redirect('panel');
		}
	}

	public function form($type, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['value'] = $this->back_m->get_one('realizations', $id);
            }
			echo loadSubViewsBack('realizacje_podstrona', 'form', $data);
		} else {
			redirect('panel');
		}
	} 

	public function action($type, $table, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			if (!is_dir('uploads/'.$now)) {
				mkdir('./uploads/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './uploads/'.$now;
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$insert['ecommerce'] = '0'; 
			$insert['social_box'] = '0'; 
			$insert['lead_generation'] = '0'; 
			$insert['social_campaign'] = '0'; 
			foreach ($_POST as $key => $value) {

				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}

				if (!$this->db->field_exists('photo3', $table)) {
					$this->base_m->create_column($table, 'photo3');
				}

				if($key == 'name_photo_1') {
					if ($this->upload->do_upload('photo_1')) {
						$data = $this->upload->data();
						$insert['photo3'] = $now.'/'.$data['file_name']; 
						if($data['image_width'] > 1440) {
							resizeImg($data['file_name'], $now, '1440');
						}  
						convert__to__webp($insert['photo3']); 
						addMedia($data);
					} elseif($value == 'usunięte') {
						$insert['photo3'] = '';
					}
				}else if($key == 'server_photo_1'){
					if($value != ''){
						$insert['photo3'] = $value;
					}
					if($value == 'usunięte'){
						$insert['photo3'] = '';
					}
					
				}else {
					$insert[$key] = $value; 
				}
            }
            if($type == 'insert') {
			    $this->back_m->insert($table, $insert);
			    $this->session->set_flashdata('flashdata', 'Rekord został dodany!');
            } else {
			    $this->back_m->update($table, $insert, $id);
			    $this->session->set_flashdata('flashdata', 'Rekord został zaktualizowany!');   
            }
			redirect('panel/realizacje_podstrona');
		} else {
			redirect('panel');
		}
	}
	
	// public function active() {
	// 	$column = $_POST['column'];
	// 	$insert[$column] = $_POST['value'];
	// 	$this->back_m->update($_POST['table'], $insert, $_POST['id']);
	// }
}