<?php

function send_email($to, $subject, $content) {
	$ci = get_instance();
	$ci->load->library("email");
	$config["protocol"] = "smtp";
	$config["smtp_host"] = "mail.praquerumo.com.br";
	$config["smtp_user"] = "contato@praquerumo.com.br";
	$config["smtp_pass"] = "@tt171423";
	$config["charset"] = "utf-8";
	$config["mailtype"] = "html";
	$config["newline"] = '\r\n';
	$config["smtp_port"] = "587";
	$ci->email->initialize($config);

	$ci->email->from("contato@praquerumo.com.br", "Pra Que Rumo");
	$ci->email->to($to);
	$ci->email->subject($subject);
	$ci->email->message($content);

	if (defined('ENVIRONMENT') && ENVIRONMENT != 'development') {
		return $ci->email->send();
	} else {
		$ci->email->to("maarc.hen@gmail.com");
		return $ci->email->send();
	}

}

function sendgrid_newsletter($email,$subject,$content) {
	$ci = get_instance();
	$ci->email->initialize(array(
			'protocol'  => 'smtp',
			'mailtype'  => 'html',
			'smtp_host' => 'smtp.sendgrid.net',
			'smtp_user' => 'praquerumo',
			'smtp_pass' => '@tt171423',
			'smtp_port' => 587,
			'crlf'      => "\r\n",
			'newline'   => "\r\n"
		));
		

		$ci->email->from('suporte@praquerumo.com', 'Pra Que Rumo');
		$ci->email->subject($subject);

		$ci->email->to($email);
		$ci->email->message($content);
		return $ci->email->send();
		
}