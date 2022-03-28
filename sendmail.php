<?php
require 'vendor/autoload.php';
$email=new \SendGrid\Mail\Mail();
$email->setFrom("santhi.g@radiantcloud.co","Santhi G");
$email->setSubject("My First Email from Send Grid - Test");
$email->addTo("shanthiraji100@gmail.com","Shanthig");
$email->addContent("text/Plain","Welcome to php send mail api");
$email->addContent("text/html","<h1>Hello All</h1>");

$sendgrid= new \SendGrid(getenv("SG.jOiF4fpsTQu1MYnMKDVs7A.vCByVn_YBpI0R0V_tClxBCb1ycGScmCoVLl6b
DE1nQI"));

try{
    $response=$sendgrid->send($email);
    print $response->statusCode()."\n";
    print_r($response->headers());
    print $response->body()."\n";
    }
catch(Exception $e){
    echo 'Caught exception:'.$e->getMessage()."\n";

}


?>