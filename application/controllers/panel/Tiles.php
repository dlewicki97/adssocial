<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiles extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists('realizations_tiles')){
				$this->base_m->create_table('realizations_tiles');
			}
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all('realizations_tiles');
			echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
		} else {
			redirect('panel');
		}
	}
	public function show($id) {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists('realizations_tiles')){
				$this->base_m->create_table('realizations_tiles');
			}
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all_where('realizations_tiles', 'item_id', $id);
			echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
		} else {
			redirect('panel');
		}
	}

	public function form($type, $item_id, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['value'] = $this->back_m->get_one('realizations_tiles', $id);
            }
			echo loadSubViewsBack($this->uri->segment(2), 'form', $data);
		} else {
			redirect('panel');
		}
	} 

	public function action($type, $table, $item_id, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			// $now = date('Y-m-d');
			// if (!is_dir('uploads/'.$now)) {
			// 	mkdir('./uploads/' . $now, 0777, TRUE);
			// }
			// $config['upload_path'] = './uploads/'.$now;
			// $config['allowed_types'] = '*';
			// $config['max_size'] = 0;
			// $config['max_width'] = 0;
			// $config['max_height'] = 0;
			// $this->load->library('upload',$config);
			// $this->upload->initialize($config);
			
			foreach ($_POST as $key => $value) {

				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}

				$insert[$key] = $value; 
				
            }
            if($type == 'insert') {
				$insert['item_id'] = $item_id;
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
}