<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_tiles extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists($this->uri->segment(2))){
				$this->base_m->create_table($this->uri->segment(2));
			}
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all($this->uri->segment(2));
			echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
		} else {
			redirect('panel');
		}
	}

	public function show($item_id) {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists($this->uri->segment(2))){
				$this->base_m->create_table($this->uri->segment(2));
			}
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all_where($this->uri->segment(2), 'item_id', $item_id);
			echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
		} else {
			redirect('panel');
		}
	}

	public function form($type, $table, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			// DEFAULT DATA
			$data = loadDefaultData();

            if($type == 'update') {
			    $data['value'] = $this->back_m->get_one($table, $id);
			}
			elseif($type == 'insert'){
				$data['item_id'] = $id;
			}
			echo loadSubViewsBack($table, 'form', $data);
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
			
			foreach ($_POST as $key => $value) {

				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}

				if (!$this->db->field_exists('photo2', $table)) {
					$this->base_m->create_column($table, 'photo2');
				}

				if($key == 'name_photo_1') {
					if ($this->upload->do_upload('photo_1')) {
						$data = $this->upload->data();
						$insert['photo'] = $now.'/'.$data['file_name']; 
						if($data['image_width'] > 1440) {
							resizeImg($data['file_name'], $now, '1440');
						}  
						convert__to__webp($insert['photo']); 
						addMedia($data);
					} elseif($value == 'usuni??te') {
						$insert['photo'] = '';
					}
				} else if($key == 'name_photo_2') {
					if ($this->upload->do_upload('photo_2')) {
						$data = $this->upload->data();
						$insert['photo2'] = $now.'/'.$data['file_name']; 
						if($data['image_width'] > 1440) {
							resizeImg($data['file_name'], $now, '1440');
						}  
						convert__to__webp($insert['photo2']); 
						addMedia($data);
					} elseif($value == 'usuni??te') {
						$insert['photo2'] = '';
					}
				}else if($key == 'server_photo_1'){
					if($value != ''){
						$insert['photo'] = $value;
					}
					if($value == 'usuni??te'){
						$insert['photo'] = '';
					}
					
				}else if($key == 'server_photo_2'){
					if($value != ''){
						$insert['photo2'] = $value;
					}
					if($value == 'usuni??te'){
						$insert['photo2'] = '';
					}
					
				} else {
					$insert[$key] = $value; 
				}
            }
            if($type == 'insert') {
			    $this->back_m->insert($table, $insert);
				$this->session->set_flashdata('flashdata', 'Rekord zosta?? dodany!');
				$item_id = $_POST['item_id'];
            } else {
			    $this->back_m->update($table, $insert, $id);
				$this->session->set_flashdata('flashdata', 'Rekord zosta?? zaktualizowany!');   
				$value = $this->back_m->get_one($table, $id);
				$item_id = $value->item_id;
			}
			
			redirect('panel/'.$table.'/'.'show/'.$item_id);
		} else {
			redirect('panel');
		}
    }
}