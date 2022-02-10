<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise_mailer extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->helper('verify');
        if(!verify_captcha($_POST['token'],  $this->back_m->get_one('settings', 1)->captcha_secret)) {
            $this->session->set_flashdata('flashdata', '<div role="alert" class="alert mb-0 alert-danger alert-dismissible"><p class="text-danger font-weight-bold mb-0">Wykryto złośliwe oprogramowanie!</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function send() { 
       
        $data['contact'] = $this->back_m->get_one('contact_settings', 1);
        $insert['name'] = $this->input->post('name');
        $insert['email'] = $this->input->post('email');
        $insert['subject'] = 'Franczyza - Formularz kontaktowy - '.$insert['name'];
        $insert['phone'] = $this->input->post('phone');
        $insert['city'] = $this->input->post('city');
        $insert['message'] = $this->input->post('message');
        if($this->input->post('rodo1') != null ) { 
            $insert['rodo1'] = '1'; 
            $_POST['rodo1'] = 'Zaakceptowane';
        } else {
            $insert['rodo1'] = '0';
            $_POST['rodo1'] = 'Niezaakceptowane';
        }
        
        $this->back_m->insert('mails', $insert);  

        require 'application/libraries/mailer/config.php';
        require 'application/libraries/mailer/functions.php';
        @require 'application/libraries/mailer/PHPMailerAutoload.php';

        $_POST['base_url'] = base_url(); 
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $cfg['smtp_host'];
        $mail->SMTPAuth = true;         
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Username = $cfg['smtp_user'];
        $mail->Password = $cfg['smtp_pass'];
        $mail->Port = $cfg['smtp_port'];
        $mail->setFrom($cfg['smtp_user'], $data['contact']->company .  ' - Agencja Social Media');
        $mail->AddBCC($data['contact']->email1);
        if(!empty($_POST['email'])) {
            $mail->addReplyTo($_POST['email']);
        }
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $data['contact']->company .  ' Franczyza - formularz kontaktowy';
        $mail->Body    = build_mail_body($_POST, 'franchise_contact.php');
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata('flashdata', '<div role="alert" class="alert alert-danger mb-0 alert-dismissible"><p class="text-danger font-weight-bold mb-0">Przepraszamy, błąd serwera...</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            exit;
        } else {
            $this->session->set_flashdata('flashdata', '<div role="alert" class="alert alert-success mb-0 alert-dismissible"><p class="text-success font-weight-bold mb-0">Pomyślnie wysłałeś formularz!</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}









