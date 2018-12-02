<?php 

include 'sendsms.php';
$sendsms=new sendsms("<sms_service_url>/api"
                      , "1ixxxxxxxxxxxxxx", "BUxxxx");

$sendsms->send_sms("99xxxxxxxx", "message", 'http://www.yourdomainname.domain/yourdlrpage&msgid=XX', 'type');
$sendsms->schedule_sms("99xxxxxxxx", "message"
                     , "http://www.yourdomainname.domain/yourdlrpage&msgid=XX", 'type',
                      '20mmyyyyhhmm');
$sendsms->unicode_sms("99xxxxxxxx","unicode msg",
                      "http://www.yourdomainname.domain/yourdlrpage&msgid=XX",'1');
$sendsms->messagedelivery_status("messageid");
$sendsms->groupdelivery_status("groupid");

//$sendsms->setWorkingKey("1i6xxxxxxxxxxxxxx");
//$sendsms->setSenderId("BUxxxx");
//$sendsms->setapiurl("<sms_service_url>/api");
?>   
