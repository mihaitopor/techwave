<?php

namespace App\Services;

use Config\Services;

class EmailService
{
    public function sendEmail($message, $recipientEmail, $senderEmail, $name, $phone)
    {
        $email = Services::email();
        $email->setFrom('contact@techwave.ro', 'Techwave');
        $email->setTo('mike.topor@yahoo.com');
        $email->setSubject("Message from TechWave Contact Form");
        $email->setMessage("$name with contact details: $senderEmail, $phone has sent the following message via the TechWave website:\n\n$message");
        $email->send();

        // Second email (to internal email)
        $email->setTo('contact@techwave.ro');
        $email->send();
    }
}
