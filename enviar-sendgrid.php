<?php

require("./sendgrid-php/sendgrid-php.php");

$email_site = "contato@valloura.com.br";
$nome_site = "Valloura";

$email_user = $_POST["email"];
$nome_user = $_POST["nome"];

$body_content = "";
foreach( $_POST as $field => $value) {
  if( $field !== "leaveblank" && $field !== "dontchange" && $field !== "enviar") {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= "$field: $value \n";
  }
}

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email_site, $nome_site);
$email->addTo($email_site, $nome_site);

$email->setReplyTo($email_user, $nome_user);

$email->setSubject("Formulário Valloura");
$email->addContent("text/plain", $body_content);

$sendgrid = new \SendGrid("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");
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo "Caught exception: ". $e->getMessage() ."\n";
}