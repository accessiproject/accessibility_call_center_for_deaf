<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Swift_Mailer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class SendController extends AbstractController
{

    /**
     * @Route("/contact", name="home_contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form['company']->getData() ? '<li>Organisme : ' . $form['company']->getData() . '</li>' : "";
            $fonction = $form['fonction']->getData() ? '<li>Fonction : ' . $form['fonction']->getData() . '</li>' : "";
            $telephone = $form['telephone']->getData() ? '<li>N° téléphone : <a href="tel:' . $form['telephone']->getData() . '">' . $form['telephone']-getData() . '</a></li>' : "";
            $mobile = $form['company']->getData() ? '<li>N° mobile : <a href="tel:' . $form['mobile']->getData() . '">' . $form['mobile']->getData() .  '</a></li>' : "";
            $message = (new \Swift_Message($form['object']->getData()))
                ->setFrom($form['email']->getData())
                ->setTo('kevin.bustamante@mail.novancia.fr')
                ->setBody('
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Mon premier mail</title>
                    </head>
                    <body>
                        <h1>Alerte! Un message vous a été envoyé</h1>
                        <h2>Informations sur le contact :</h2>
                        <ul>
                            <li>Prénom : ' . $form["firstname"]->getData() . '</li>
                            <li>Nom : ' . $form["lastname"]->getData() . '</li>' . $company . $fonction . '<li>Adresse email : <a href="mailto:' . $form["email"]->getData() . '">' . $form["email"]->getData() . '</a></li>' . $telephone . $mobile .
                        '</ul>
                </body>
                </html>
                ', 'text/html');
            $mailer->send($message);
            return $this->redirectToRoute('home_contact');
        }
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form->createView(),
        ]);
    }
}
