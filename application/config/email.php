<?php
    /**
     * Created by PhpStorm.
     * User: Mahefa
     * Date: 08/03/2017
     * Time: 16:23
     */
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'user@gmail.com'; //change this
    $config['smtp_pass'] = 'password'; //change this
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
?>