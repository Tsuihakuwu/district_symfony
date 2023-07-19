<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use App\Entity\Utilisateur;


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

    public function sendTemplatedEmail(Utilisateur $user, $panier)
    {
        $email = (new TemplatedEmail())
            ->from('commande@thedistrict.fr')
            ->to($user->getEmail())
            ->subject('Récapitulatif de votre commande')
            ->htmlTemplate('email/recap_com.html.twig')
            ->context([
                'user' => $user,
                'panier' => $panier,
            ]);

        $this->mailerInterface->send($email);
    }
}
