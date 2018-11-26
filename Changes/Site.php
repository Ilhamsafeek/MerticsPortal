<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	 public  function __construct(){
		parent::__construct();
		 $this->load->database();
	 
	}
	public function index(){

		$this->home();
	}

	
	public function home()
	{		
		$data['title']='Mertics | Business Intelligence software company in Sri Lanka';		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/slider');	
		$this->load->view('template/sections/solutions');
		$this->load->view('template/sections/our-special');
		$this->load->view('template/sections/portfolio');
		$this->load->view('template/sections/clients');
		$this->load->view('template/sections/technologies');
		//$this->load->view('template/sections/events');
		//$this->load->view('template/sections/extra-service');
		$this->load->view('template/footer');
	}

	public function page_404(){
		$data['title']='Mertics | Business Intelligence software company in Sri Lanka';		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/page-404');
		$this->load->view('template/footer');


	}

		public function career($vacancy='all')
	{		
		if($vacancy=="all"){
		$data['title']='Careers | Business Intelligence software company in Sri Lanka';
		$data['heading']='Join us to make a difference';
		$data['page']='Careers';
		$data['background']=base_url('assets/img/banner/careers-banner.png');	

		$query = $this->db->query("SELECT * FROM vacancy");
		$data['all_vacancies']=$query->result();		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/career/vacancies');	
		$this->load->view('template/sections/career/sendcv');	
		$this->load->view('template/footer');
		}else{
		$data['title']='Careers | Business Intelligence software company in Sri Lanka';	
		$data['heading']='Join us to make a difference';
		$data['page']='Careers';
		$data['background']=base_url('assets/img/banner/careers-banner.png');
		 
		 $query = $this->db->query("SELECT * FROM vacancy WHERE vacancy='".urldecode($vacancy)."'");
		 
        foreach ($query->result() as $row) {
            $data['description']=$row->description;
             $data['type']=$row->type;
             $data['closing_date']=$row->closing_date;
             $data['experience']=$row->experience;
        }
		 $data['vacancy']=urldecode($vacancy);
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/career/vacancy');	
		$this->load->view('template/footer');
		}
	}


	public function team($name="all")
	{	

		if($name=="all"){
		$data['title']='Our Team | Business Intelligence software company in Sri Lanka';

		$data['heading']='Join us to make a difference';
		$data['page']='Our Team';
		$data['background']=base_url('assets/img/banner/careers-banner.png');	
		$query = $this->db->query("SELECT * FROM team");
			
		$data['team_members']=$query->result();	
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/team');	
		$this->load->view('template/footer');
		}else{
		 $data['title']='Our Team | Business Intelligence software company in Sri Lanka';	
		
		$data['heading']='Join us to make a difference';
		$data['page']='Our Team';
		$data['background']=base_url('assets/img/banner/careers-banner.png');	
		 $query = $this->db->query("SELECT * FROM team WHERE name='".urldecode($name)."'");
		 
        foreach ($query->result() as $row) {
            $data['img']=$row->photo;
             $data['post_title']=$row->post_title;
             $data['email']=$row->email;
             $data['description']=$row->description;
        }
		 $data['name']=urldecode($name);
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/profile');	
		$this->load->view('template/footer');
		}
		
	}

	public function contact()
	{		
		$data['title']='Contact | Business Intelligence software company in Sri Lanka';
		$data['heading']='Sheer up for joyful chat with us!';
		$data['page']='Contact';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/contact/our-office');
		$this->load->view('template/sections/contact/googlemap');
		$this->load->view('template/sections/contact/contact');	
		

		$this->load->view('template/footer');
	}


	public function how_we_work()
	{		
		$data['title']='How we work | Business Intelligence software company in Sri Lanka';
		$data['heading']='We cater the requirements of our clients with pleasure!';
		$data['page']='How we work';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/methodology/sdlc');	
		$this->load->view('template/sections/technology-stack');
		

		$this->load->view('template/footer');
	}


	public function industries()
	{		
		$data['title']='Industries | Business Intelligence software company in Sri Lanka';
		$data['heading']='We provide wide range of services!';
		$data['page']='Industries';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/industries/industries');

		

		$this->load->view('template/footer');
	}



	public function clients()
	{		
		$data['title']='Clients | Business Intelligence software company in Sri Lanka';
		$data['heading']='Our services are becoming rich with clients!';
		$data['page']='Clients';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/clients/allclients');

		

		$this->load->view('template/footer');
	}


	public function what_we_do()
	{		
		$data['title']='What we do | Business Intelligence software company in Sri Lanka';
		$data['heading']='Our services are becoming rich with clients!';
		$data['page']='About>>What we do';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/solutions');
		$this->load->view('template/sections/technology-stack');

		

		$this->load->view('template/footer');
	}


	public function company()
	{		
		$data['title']='About company | Business Intelligence software company in Sri Lanka';
		$data['heading']='It’s the quality that speaks; and the people that matter.';
		$data['page']='About>>Company';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/company/about');
		$this->load->view('template/sections/company/vision-mission');
		$this->load->view('template/sections/company/core-values');
		
		

		$this->load->view('template/footer');
	}


	public function culture()
	{		
		$data['title']='Our Culture | Business Intelligence software company in Sri Lanka';
		$data['heading']='It’s the quality that speaks; and the people that matter.';
		$data['page']='About>>Culture';
		$data['background']=base_url('assets/img/banner/contact-banner.jpg');		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/pagetitle');
		$this->load->view('template/sections/our-culture');
		
		$this->load->view('template/footer');
	}


	public function technologies()
	{		
		$data['title']='Technologies | Business Intelligence software company in Sri Lanka';	
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/technology-stack');
		
		$this->load->view('template/footer');
	}

	

	public function sendmail(){
		$config = Array(
		'protocol'=> 'smtp',
		 'smtp_host'=>'ssl://smtp.googlemail.com',
		  'smtp_port'=>'465',
		  'smtp_user'=>'moratuwait@gmail.com',
		  'smtp_pass'=>'123'
		);

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$this->email->from('moratuwait@gmail.com', $_POST['name']);
		$this->email->to('moratuwait@gmail.com');
		$this->email->subject('test email');
		$this->email->message($_POST['message']);

		if($this->email->send()){
			echo "Your email sent!!";
		}else{
			show_error($this->email->print_debugger());
		}
	}




	public function sendemail(){
		$data['title']='Business Intelligence software company in Sri Lanka';	
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sections/sendemail');
		
		$this->load->view('template/footer');
		
	}

	 public function send()
 {
  $subject = 'Application for Programmer Registration By - ' . $this->input->post("name");
  $programming_languages = implode(", ", $this->input->post("programming_languages"));
  $file_data = $this->upload_file();
  if(is_array($file_data))
  {
   $message = '
   <h3 align="center">Programmer Details</h3>
    <table border="1" width="100%" cellpadding="5">
     <tr>
      <td width="30%">Name</td>
      <td width="70%">'.$this->input->post("name").'</td>
     </tr>
     <tr>
      <td width="30%">Address</td>
      <td width="70%">'.$this->input->post("address").'</td>
     </tr>
     <tr>
      <td width="30%">Email Address</td>
      <td width="70%">'.$this->input->post("email").'</td>
     </tr>
     <tr>
      <td width="30%">Progamming Language Knowledge</td>
      <td width="70%">'.$programming_languages.'</td>
     </tr>
     <tr>
      <td width="30%">Experience Year</td>
      <td width="70%">'.$this->input->post("experience").'</td>
     </tr>
     <tr>
      <td width="30%">Phone Number</td>
      <td width="70%">'.$this->input->post("mobile").'</td>
     </tr>
     <tr>
      <td width="30%">Additional Information</td>
      <td width="70%">'.$this->input->post("additional_information").'</td>
     </tr>
    </table>
   ';

   $config = Array(
         'protocol'  => 'smtp',
         'smtp_host' => 'smtpout.secureserver.net',
         'smtp_port' => 80,
         'smtp_user' => 'xxxxxxxxxx', 
         'smtp_pass' => 'xxxxxxxxxx', 
         'mailtype'  => 'html',
         'charset'  => 'iso-8859-1',
         'wordwrap'  => TRUE
      );
   //$file_path = 'uploads/' . $file_name;
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from($this->input->post("email"));
      $this->email->to('web-tutorial@programmer.net');
      $this->email->subject($subject);
         $this->email->message($message);
         $this->email->attach($file_data['full_path']);
         if($this->email->send())
         {
          if(delete_files($file_data['file_path']))
          {
           $this->session->set_flashdata('message', 'Application Sended');
           redirect('sendemail');
          }
         }
         else
         {
          if(delete_files($file_data['file_path']))
          {
           $this->session->set_flashdata('message', 'There is an error in email send');
           redirect('sendemail');
          }
         }
     }
     else
     {
      $this->session->set_flashdata('message', 'There is an error in attach file');
         redirect('sendemail');
     }
 }



 function upload_file()
 {
  $config['upload_path'] = 'uploads/';
  $config['allowed_types'] = 'doc|docx|pdf';
  $this->load->library('upload', $config);
  if($this->upload->do_upload('resume'))
  {
   return $this->upload->data();   
  }
  else
  {
   return $this->upload->display_errors();
  }
 }


}
