<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->db->table_exists('users')) {
			$this->base_m->create_base();
		}
	}

	public function index()
	{
		$data = loadDefaultDataFront();
		$data['banner'] = $this->back_m->get_one('banner', 1);
		$data['partners'] = $this->back_m->get_all('partners');
		$data['menu_icons'] = $this->back_m->get_all('menu_icons');
		$data['realizations_descriptions'] = $this->back_m->get_one('realizations_descriptions', 1);
		$data['filters'] = $this->back_m->get_all('filters');
		$data['realizations_filters'] = $this->back_m->get_all('realizations_filters');
		$data['realizations'] = $this->back_m->get_all('realizations');
		$data['lemon'] = $this->back_m->get_one('assets', 1);
		$data['circle_grey'] = $this->back_m->get_one('assets', 2);
		$data['circle_blue'] = $this->back_m->get_one('assets', 3);
		$data['team_descriptions'] = $this->back_m->get_one('team_descriptions', 1);
		$data['team'] = $this->back_m->get_all('team');
		$data['services_descriptions'] = $this->back_m->get_one('services_descriptions', 1);
		$data['services'] = $this->back_m->get_all('services');
		$data['contact_descriptions'] = $this->back_m->get_one('contact_descriptions', 1);
		$data['contact_buttons'] = $this->back_m->get_all('contact_buttons');


		echo loadViewsFront('index', $data);
	}


	public function realizations($name, $id)
	{
		$data = loadDefaultDataFront();
		$data['tiles_eCommerce'] = $this->back_m->get_tiles('eCommerce', $id);
		$data['tiles_SocialBox'] = $this->back_m->get_tiles('SocialBox', $id);
		$data['tiles_LeadGeneration'] = $this->back_m->get_tiles('LeadGeneration', $id);
		$data['tiles_SocialCampaign'] = $this->back_m->get_tiles('SocialCampaign', $id);
		$data['eCommerce_gallery'] = $this->back_m->get_images('gallery', 'eCommerce', $id);
		$data['bestsellers'] = $this->back_m->get_images('gallery', 'realizations_bestsellers', $id);
		$data['SocialBox_gallery'] = $this->back_m->get_images('gallery', 'SocialBox', $id);
		$data['campaign'] = $this->back_m->get_images('gallery', 'realizations_campaign', $id);


		$data['LeadGeneration_gallery'] = $this->back_m->get_images('gallery', 'LeadGeneration', $id);
		$data['LeadGeneration_images'] = $this->back_m->get_images('gallery', 'leadGeneration_galeria', $id);
		$data['SocialCampaign_gallery'] = $this->back_m->get_images('gallery', 'SocialCampaign', $id);
		$data['SocialCampaign_images'] = $this->back_m->get_images('gallery', 'socialCampaign_galeria', $id);

		$data['value'] = $this->back_m->get_one('realizations', $id);
		$data['title'] = $data['value']->name;
		$data['subtitle'] = $data['value']->title;
		$data['lemon'] = $this->back_m->get_one('assets', 1);



		echo loadSubViewsFront('realizations', $data);
	}

	public function services($name, $id)
	{
		$data = loadDefaultDataFront();
		$data['header_1'] = $this->back_m->get_services_section(1, $id);
		$data['header_2'] = $this->back_m->get_services_section(2, $id);
		$data['header_3'] = $this->back_m->get_services_section(3, $id);
		$data['header_4'] = $this->back_m->get_services_section(4, $id);
		$data['tiles'] = $this->back_m->get_all_where('service_tiles', 'item_id', $id);
		$data['columns'] = $this->back_m->get_all_where('service_columns', 'item_id', $id);
		$data['gallery'] = $this->back_m->get_images('gallery', 'services', $id);
		$data['value'] = $this->back_m->get_one('services', $id);
		$data['title'] = $data['value']->name;
		$data['subtitle'] = $data['value']->subtitle;
		$data['contact_descriptions'] = $this->back_m->get_one('contact_descriptions', 1);
		$data['contact_buttons'] = $this->back_m->get_all('contact_buttons');
		$data['price_list'] = $this->back_m->get_all_where('price_list', 'item_id', $id);
		$data['lemon'] = $this->back_m->get_one('assets', 1);
		echo loadSubViewsFront('services', $data);
	}

	public function team()
	{
		$data = loadDefaultDataFront();
		$data['people'] = $this->back_m->get_all_order('team', 'sub_order');
		$data['title'] = 'Zespół';
		$data['subtitle'] = 'Poznaj lepiej ekipę Ad Social!';
		$data['lemon'] = $this->back_m->get_one('assets', 1);
		echo loadSubViewsFront('team', $data);
	}


	public function franchise()
	{
		$data = loadDefaultDataFront();
		$data['current_subpage'] = $this->back_m->get_subpage($this->uri->segment(1));
		$data['title'] = $data['current_subpage']->title;
		$data['subtitle'] = $data['current_subpage']->subtitle;
		$data['franchise_subjects'] = $this->back_m->get_all('franchise_subjects');
		$data['franchise_headers'] = $this->back_m->get_one('franchise_headers', 1);
		$data['franchise_model'] = $this->back_m->get_one('franchise_model', 1);
		$data['franchise_benefits'] = $this->back_m->get_all('franchise_benefits');
		$data['franchise_benefits_desc'] = $this->back_m->get_one('franchise_benefits_desc', 1);
		$data['franchise_business'] = $this->back_m->get_one('franchise_business', 1);
		$data['franchise_support'] = $this->back_m->get_all('franchise_support');
		$data['franchise_support_desc'] = $this->back_m->get_one('franchise_support_desc', 1);
		$data['franchise_blue_section_bg'] = $this->back_m->get_one('franchise_blue_section_bg', 1);
		$data['franchise_cooperation'] = $this->back_m->get_all('franchise_cooperation');
		$data['franchise_cooperation_desc'] = $this->back_m->get_one('franchise_cooperation_desc', 1);
		$data['franchise_simulation'] = $this->back_m->get_one('franchise_simulation', 1);
		$data['franchise_representatives'] = $this->back_m->get_all('franchise_representatives');
		$data['franchise_questions'] = $this->back_m->get_one('franchise_questions', 1);
		$data['franchise_yellow_form'] = $this->back_m->get_one('franchise_yellow_form', 1);
		$data['franchise_blue_form'] = $this->back_m->get_one('franchise_blue_form', 1);
		$data['franchise_partners'] = $this->back_m->get_all('franchise_partners');
		$data['franchise_partners_desc'] = $this->back_m->get_one('franchise_partners_desc', 1);

		echo loadSubViewsFront('franchise', $data);
	}
}