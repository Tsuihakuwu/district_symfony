<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactFormType::class);

        // $form = $this->createForm(ContactFormType::class, null, [
            // 'action' => $this->generateUrl('ma_route_spécifique'),
        // ]);>

        $form->handleRequest($request);

        if ($form->isSubmitted()&&$form->isValid()){

            $message = new Contact();
            $data = $form->getData();
            $message = $data;

            $entityManager->persist($message);
            $entityManager->flush();

            $email = (new Email())
                ->from('admin@thedistrict.com')
                ->to($data->getEmail())
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>See Twig integration for better HTML integration!</p>');

            $mailer->send($email);
            
            return $this->redirectToRoute('app_accueil');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form
        ]);
    }
}