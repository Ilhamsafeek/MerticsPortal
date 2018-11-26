<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){

		$this->home();
	}

	
	public function home()
	{		
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/slider');
		$this->load->view('trading/sections/trading-items');
		$this->load->view('trading/footer');
	}

	public function page_404(){
		$data['title']='Business Intelligence software company in Sri Lanka';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/page-404');
		$this->load->view('trading/footer');


	}



	public function gem(){
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';
		$data['heading']='Sri Lanka - Gem from the capital of Sapphire';
		$data['background']=main_base_url('assets/img/trading/products/banner/gem-banner.jpg');
		$data['page']='Gem';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/products/title');
		$this->load->view('trading/sections/products/gem');
		$this->load->view('trading/footer');


	}

	public function tea(){
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';
		$data['heading']='The best National haritage of Sri Lanka - Wide varieties of Tea';
		$data['background']=main_base_url('assets/img/trading/products/banner/tea-banner.jpg');
		$data['page']='Tea';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/products/title');
		$this->load->view('trading/sections/products/tea');
		$this->load->view('trading/footer');


	}

	public function textile(){
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';
		$data['heading']='Sri Lankan and western culture clothes from Sri Lanka - Best Quality for style';
		$data['background']=main_base_url('assets/img/trading/products/banner/textile-banner.jpg');
		$data['page']='Textile & Clothes';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/products/title');
		$this->load->view('trading/sections/products/textile');
		$this->load->view('trading/footer');


	}

	public function spices(){
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';
		$data['heading']='Export Quality Spices - All kinds of Sri Lankan Spices - Make your food tasty';
		$data['background']=main_base_url('assets/img/trading/products/banner/spices-banner.jpg');
		$data['page']='Spices';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/products/title');
		$this->load->view('trading/sections/products/spices');
		$this->load->view('trading/footer');


	}


	//Import Items from turkey

	public function import()
	{		
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/slider');
		$this->load->view('trading/sections/import-items');
		$this->load->view('trading/footer');
	}


	public function import_polish(){
		$data['title']='Mertics Trade | The Large Station for Import and Export from Sri Lanka';
		$data['heading']='Export Quality Spices - All kinds of Sri Lankan Spices - Make your food tasty';
		$data['background']=main_base_url('assets/img/trading/products/banner/spices-banner.jpg');
		$data['page']='Spices';		
		$this->load->view('trading/header',$data);
		$this->load->view('trading/navigation');
		$this->load->view('trading/sections/import/title');
		$this->load->view('trading/sections/import/polish');
		$this->load->view('trading/footer');


	}
	
	
	
	


}
