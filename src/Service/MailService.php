<?php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{
    private $mailerInterface;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailerInterface = $mailer;
    }

    public function sendMail($email, $adminmail,  $sujet, $text)
    {
        $email = (new Email())
            ->from($email)
            ->to($adminmail)
            ->subject($sujet)
            ->text($text);

            $this->mailerInterface->send($email);
    }
}