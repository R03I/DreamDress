<?php
	class mail_send extends dbConnection
	{
		public $to;
		public $subject;
		public $txt;
		public $headers;

		function __construct($to , $subject, $txt, $headers)
		{
			$this->to = $to;
			$this->subject = $subject;
			$this->txt = $txt;
			$this->headers = $headers;
		}
		function send_mail(){
			$subject = '=?UTF-8?B?'.base64_encode($this->subject).'?=';
			mail($to,$subject,$txt,$headers);
		}
	}
?>