<?php
    use Mailtrap\MailtrapClient;
    use Mailtrap\Mime\MailtrapEmail;
    use Symfony\Component\Mime\Address;

    function mailtrapSender($mail, $asunto, $mensaje){

        $apiKey = $_ENV['mailtrapToken'];
        $mailtrap = MailtrapClient::initSendingEmails(
            apiKey: $apiKey,
        );

        $email = (new MailtrapEmail())
            ->from(new Address('registro@cms2025-2.site', 'Registro CMS'))
            ->to(new Address($mail))
            ->subject($asunto)
            ->text($mensaje)
            ->category('Registro exitoso')
        ;

        return $mailtrap->send($email);
        
    }
    
?>