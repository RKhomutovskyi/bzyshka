<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		*** SMTP *** //

		 require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		 const HOST = 'smtp.gmail.com';
		 const LOGIN = 'oymanager2@gmailcom';
		 const PASS = 'fuziipwxxbtcrebk';
		 const PORT = '465';

		*** /SMTP *** //
   
    // const SENDER = 'sender@yandex.ru';
    // const CATCHER = 'catcher@ya.ru';
	const SENDER = 'oymanager2@gmailcom';
    const CATCHER = 'r.khomutovskyi@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    