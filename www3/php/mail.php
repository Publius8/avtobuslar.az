<?php
header('Content-Type: text/html; charset=utf-8', true);

include 'functions.php';
require('class.phpmailer.php');

if(getenv('HTTP_X_REQUESTED_WITH')!=='XMLHttpRequest') {
  header("location: error.htm");
  exit;
}

$ignore_captcha = $_SERVER['REMOTE_ADDR']=="127.0.0.1" ||
strpos($_SERVER['HTTP_HOST'],'192.168.')!==false || strpos($_SERVER['HTTP_HOST'],'localhost')!==false;
$recaptcha_response = $_POST['recaptcharsp'] ?? "";

$data['status'] = "OK";
$data['caption'] = "";
$data['content'] = "";
$data['order'] = "";

if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST' && ($recaptcha_response || $ignore_captcha)){

    $recap = "";
    if(!$ignore_captcha){
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LdnyesnAAAAAGwMJC-JMfY_Fbzqp1wK_I2xeVJz';
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response. '&remoteip=' . $_SERVER['SERVER_ADDR']);
        $recaptcha = json_decode($recaptcha);
        $recap = $recaptcha->success;
    }
    if($recap || $ignore_captcha){

        $param_vehicle          = $_POST['param_vehicle'] ?? "";
        $param_description      = $_POST['param_description'] ?? "";
        $param_destination      = $_POST['param_destination'] ?? "";
        $param_seat             = $_POST['param_seat'] ?? "";
        $param_price            = $_POST['param_price'] ?? "";
        $first_name             = $_POST['first_name'] ?? "";
        $last_name              = $_POST['last_name'] ?? "";
        $phone_number           = $_POST['phone_number'] ?? "";
        $email_addr             = $_POST['email_addr'] ?? "";
        $timeval                = $_POST['timeval'] ?? "";
        $start_date             = $_POST['start_date'] ?? "";
//        $end_date               = $_POST['end_date'] ?? "";
        $note_text              = $_POST['note_text'] ?? "";
        $total_ammount          = $_POST['total_ammount'] ?? "";
        $for_days               = $_POST['for_days'] ?? "";

        $data['order'] = "
            $param_vehicle
            $param_description
            $param_destination
            $param_seat
            $param_price

            $first_name
            $last_name
            $phone_number
            $email_addr
            $timeval
            $start_date

            $note_text

            $total_ammount
            $for_days
        ";

      $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
      $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

    //........................................................................................................
    class MailAgent {

     public $_SMTPServer = '';
     public $_SMTPLogin = '';
     public $_SMTPPass = '';
     public $_SMTPPort = '';
     public $_SMTPAuth = true;
     public $_SMTPSecure = '';
     public $_mailFrom = '';
     public $_mailCharSet = "";
     private $_mail = null;

     public $parts = array();

    	public function __construct()
    	{
      	if ($this->_mail == null) {
    //  		$this->initMailAgent();
      	}
    	}

    	public function __destruct()
    	{
    //      $this->MailAgent_remAttachment();      ///////Отключение удаления файла атачмента.
    	}


     public function initMailAgent()
     {
    //	require_once('class.phpmailer.php');

    	$this->_mail  = new PHPMailer();
    	// Устанавливаем, что наши сообщения будет идти через
    	// SMTP сервер
    	$this->_mail->IsSMTP();

    	// Можно раскомментировать след. строчку для отладки
    	// 1 = Ошибки и сообщения
    	// 2 = Только сообщения
    	//$mail->SMTPDebug  = 2;

    	// Включение SMTP аутентификации
        // Большинство серверов ее требуют
    	$this->_mail->SMTPAuth   = $this->_SMTPAuth;
    	// SMTP Сервер отправки сообщений
    	$this->_mail->Host       = $this->_SMTPServer;
    	// Порт сервера (чаще всего 25)
    	$this->_mail->Port       = $this->_SMTPPort;

        $this->_mail->SMTPSecure = $this->_SMTPSecure;
    	// SMTP Логин для авториации
    	$this->_mail->Username   = $this->_SMTPLogin;
    	// SMTP Пароль для авторизации
    	$this->_mail->Password   = $this->_SMTPPass;
    	// Кодировка сообщения
    	$this->_mail->CharSet    = $this->_mailCharSet;
     }


     public function MailAgent_addFile($filename) {
          $cnt = count($this->parts)+1;
          $this->parts[$cnt-1] = $filename;
          $this->_mail->AddAttachment($filename);
     }

      public function MailAgent_remAttachment(){
           for($i=0;$i<count($this->parts);$i++) unlink($this->parts[$i]);
      }


     public function sendMail( $address, $subject, $body, $from='' )
     {
    //	if ($this->_mail == null) {
    //		$this->initMailAgent();
    //	}
        $retval = "";

    	// Устанавливаем от кого будет уходить почта
    	$this->_mail->SetFrom($from=='' ? $this->_mailFrom : $from);
    	// Устанавливаем заголовк письма
    	$this->_mail->Subject    = $subject;
    	// Текст сообщения
    	$this->_mail->MsgHTML($body);

    	if (is_array($address)) {
    	// Отправка сообщений сразу нескольким пользователям
    		foreach($address as $value) {
    			$this->_mail->AddAddress($value);
    		}
    	} else {
    		// Адрес получателя. Второй параметр - имя получателя (не обязательно)
    		$this->_mail->AddAddress($address);
    	}

    	// Отправляем сообщение
        $sndcode = $this->_mail->Send();
    	if(!$sndcode) {
    //	  echo "Ошибка отправки: " . $this->_mail->ErrorInfo;
          $retval = "Ошибка отправки: " . $this->_mail->ErrorInfo;
    	} else {
    //	  echo "Сообщение отправлено на {$address}<br/>";
          $retval = "OK";
    	}

        return $retval;
     }


    }

    //........................................................................................................
        $mail = new MailAgent();

        $mail->_SMTPServer = 'mail.avtobuslar.az';
        $mail->_SMTPLogin = 'no_reply@avtobuslar.az';
        $mail->_SMTPPass = 'sdKsodfrt5796751';
        $mail->_SMTPPort = 25;
        $mail->_SMTPAuth = 1;
//        $mail->_SMTPSecure = 'tls';
//        $mail->_SMTPSecure = 'ssl';
        $mail->_mailFrom = 'no_reply@avtobuslar.az';
        $mail->_mailCharSet = 'utf-8';

        $mail->initMailAgent();

        date_default_timezone_set('Asia/Baku');
        $time2 = time();    // + (4*60*60);  //summer time (11*60*60); winter time (10*60*60)

    	$yearID=date("Y", $time2);
    	$monthID=date("m", $time2);
    	$dateID=date("d", $time2);
    	$hoursID=date('H', $time2);
    	$minutesID=date("i", $time2);
    	$secondsID=date("s", $time2);
    	$weekdayID=date('w', $time2);
        $cmpdate = $yearID."-".sprintf("%02d", $monthID)."-".sprintf("%02d", $dateID)." ".sprintf("%02d", $hoursID).":".sprintf("%02d", $minutesID).":".sprintf("%02d", $secondsID);


        $out_email = "info@avtobuslar.az";


        $msgsubject  = "Order from the customer ({$cmpdate})";
        $msgbrd = "<hr />
        <table border=0 cellspacing=3 cellpadding=6>
        <caption style=\"color:#5050f0\"><b><i>SİFARİŞ DETALLARI:</i></b></caption>
        <tr bgcolor=\"#eeeeff\"><td bgcolor=\"#eeeeff\">Nəqliyyat: </td><td><b>$param_description</b> </td></tr>
        <tr><td>İstiqamət: </td><td><b>$param_destination</b> </td></tr>
        <tr bgcolor=\"#eeeeff\"><td bgcolor=\"#eeeeff\">Adam sayı: </td><td><b>$param_seat</b> </td></tr>
        <tr><td>Gediş tarixi: </td><td><b>$start_date</b> </td></tr>
        <tr bgcolor=\"#eeeeff\"><td bgcolor=\"#eeeeff\">Vaxt: </td><td><b>$timeval</b> </td></tr>
        <tr><td>Qiymət: </td><td><b>$total_ammount</b> </td></tr>
        </table>
        <hr />

        <table border=0 cellspacing=3 cellpadding=6>
        <caption style=\"color:#5050f0\"><b><i>MÜŞTƏRİ MƏLUMATLARI:</i></b></caption>
        <tr bgcolor=\"#eeeeff\"><td bgcolor=\"#eeeeff\">Ad: </td><td><b>$first_name</b> </td></tr>
        <tr><td>Soyad: </td><td><b>$last_name</b> </td></tr>
        <tr bgcolor=\"#eeeeff\"><td bgcolor=\"#eeeeff\">Mobil nömrə: </td><td><b>$phone_number</b> </td></tr>
        <tr><td>Email: </td><td><b>$email_addr</b> </td></tr>
        <tr bgcolor=\"#eeeeff\"><td bgcolor=\"#eeeeff\">Rəy: </td><td><div style=\"padding:5px;\">$note_text</div></td></tr>
        </table>
            ";

        $retval = $mail->sendMail($out_email, $msgsubject, $msgbrd);
        unset($mail);

        $data['content'] = $retval;

    }else{
        $data['status'] = "reCaptcha=failed";
        $data['caption'] = "reCaptcha failed";
        $data['content'] = "Please, check reCaptcha and try again.";
    }
}else{
    $data['status'] = "method=failed";
    $data['caption'] = "Methos failed";
    $data['content'] = "Please, check and try again.";
}
echo json_encode($data);