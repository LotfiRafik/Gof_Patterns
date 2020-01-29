<?php
namespace core\Controller;
use app\model\Parametres;
use app\views\View;
use app\views\template1;
use app\views\template2;
use PHPMailer\src\PHPMailer;
use PHPMailer\src\SMTP;

abstract class  Controller implements \core\Controller\observer{

  //Observer Pattern
   public abstract function update();
  //--------------------------//


  public function render($vue,$array=[],$other=[])
  {
    $parametres = new Parametres ;
    $param = $parametres->liste();
    // Patron decorator
    $view = new View($vue,$array,$other);
    $template1 = new template1($view,$param);
    $template2 = new template2($template1);
    echo $template2->getView();
  }


  public function hashPassword($pass)
  {
	return sha1($pass);
  }

  public  function htmlspecialchars()
  {
	foreach ($_POST as $key => $value)
	{
		$_POST[$key] = htmlspecialchars($_POST[$key]);
	}	
  }



  public function sendMail($from,$to,$subject,$body)
  {

		$mail = new PHPMailer(true);
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'apikey';                     // SMTP username
    $mail->Password   = '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';                     // SMTP username
		$mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
		$mail->Port       = 465;                                    // TCP port to connect to
		$mail->setFrom($from, 'PDC DEMO');
		$mail->addAddress($to);     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->send();
  }
  
}
