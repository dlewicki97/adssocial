<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise_yellow_form extends CI_Controller {

	public function index() {
		redirect('panel/franchise_yellow_form/form/update/1');
	}

	public function form($type, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['value'] = $this->back_m->get_one($this->uri->segment(2), $id);
            }
			echo loadSubViewsBack($this->uri->segment(2), 'form', $data);
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
					} elseif($value == 'usunięte') {
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
					} elseif($value == 'usunięte') {
						$insert['photo2'] = '';
					}
				}else if($key == 'server_photo_1'){
					if($value != ''){
						$insert['photo'] = $value;
					}
					if($value == 'usunięte'){
						$insert['photo'] = '';
					}
					
				}else if($key == 'server_photo_2'){
					if($value != ''){
						$insert['photo2'] = $value;
					}
					if($value == 'usunięte'){
						$insert['photo2'] = '';
					}
					
				} else {
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
			redirect('panel/'.$table);
		} else {
			redirect('panel');
		}
    }
}