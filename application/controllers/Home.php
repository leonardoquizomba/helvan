<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require APPPATH . '/third_party/PHPMailer/src/PHPMailer.php';
require APPPATH . '/third_party/PHPMailer/src/Exception.php';
require APPPATH . '/third_party/PHPMailer/src/SMTP.php';

class Home extends CI_Controller
{

	public function index()
	{
		$data = $this->_data('Inicio');
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/home', $data);
		$this->load->view('site/partes/footer', $data);
	}

	public function sobre()
	{
		$data = $this->_data('Sobre nos');
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/sobre', $data);
		$this->load->view('site/partes/footer', $data);
	}

	public function empresa()
	{
		$data = $this->_data('Nossas Empresas');
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/empresas', $data);
		$this->load->view('site/partes/footer', $data);
	}

	public function contacto()
	{
		$this->send_mail();



		$data = $this->_data(' - Contactos');
		$data['offices'] = array(
			array(
				'nome' => 'Head Office',
				'endereco' => 'Aspire Software Solutions <br> 202, Parishram Complex,<br>
								Mithakhali Six Roads,<br> Navrangpura, Ahmedabad,<br> Gujarat, India.',
				'telefone' => '(+244) xxx xxx xxx',
				'email' => 'mail@example.com'
			)
		);
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/contactos', $data);
		$this->load->view('site/partes/footer', $data);
	}

	private function _data($title = '')
	{
		$data['title'] = 'Helvan - ' . $title;
		$data['social'] = array(
			'facebook' => '',
			'twitter' => '',
			'linkedin' => '',
			'pinterest' => '',
			'google' => '',
			'instagram' => '',
			'skype' => '',
		);
		$data['contactos'] = array(
			'tel' => '(+244) 939 369 484',
			'email' => 'geral@helvan.co.ao',
			'morada' => ''
		);
		return $data;
	}

	public function send_mail()
	{
		$mail = new PHPMailer(true);

		try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host = 'mail.helvan.co.ao';                    // Set the SMTP server to send through
			$mail->SMTPAuth = true;                                   // Enable SMTP authentication
			$mail->Username = 'site@helvan.co.ao';                     // SMTP username
			$mail->Password = 'b4HPVGD8StmQ';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->SMTPAutoTLS = true;                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
			$mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('site@helvan.co.ao', 'SITE HELVAN');
			$mail->addAddress('site@helvan.co.ao', 'SITE HELVAN');     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

}
