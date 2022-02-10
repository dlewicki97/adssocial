<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_list extends CI_Controller {

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

	public function form($type, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($type == 'update') {
			    $data['value'] = $this->back_m->get_one($this->uri->segment(2), $id);
			}
			if($type == 'insert') {
			    $data['item_id'] = $id;
            }
			echo loadSubViewsBack($this->uri->segment(2), 'form', $data);
		} else {
			redirect('panel');
		}
	} 

	public function action($type, $table, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			
			
			foreach ($_POST as $key => $value) {

				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}

					$insert[$key] = $value; 

            }
            if($type == 'insert') {
			    $this->back_m->insert($table, $insert);
				$this->session->set_flashdata('flashdata', 'Rekord został dodany!');
				$value = $this->back_m->get_last_by_id($table);
				$item_id = $value->item_id; 
            } else {
			    $this->back_m->update($table, $insert, $id);
				$this->session->set_flashdata('flashdata', 'Rekord został zaktualizowany!');   
				$value = $this->back_m->get_one($table, $id);
				$item_id = $value->item_id; 
            }
			redirect('panel/'.$table.'/'.'show/'.$item_id);
		} else {
			redirect('panel');
		}
    }
}