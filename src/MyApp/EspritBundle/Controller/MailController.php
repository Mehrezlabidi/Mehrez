<?php

namespace MyApp\EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
{
    public function indexAction()
    {
       $message = \Swift_Message::newInstance()     // we create a new instance of the Swift_Message class
        ->setSubject('Symfony Email')     // we configure the title
        ->setFrom('send@example.com')     // we configure the sender
        ->setTo('recipient@example.com')     // we configure the recipient
        ->setContentType("text/html")
        ->setBody($this->renderView('MyAppEspritBundle:Mail:email.html.twig'));
         // and we pass the $name variable to the text template which serves as a body of the message
  
        $this->get('mailer')->send($message);     // then we send the message.
      return $this->render('MyAppEspritBundle:Default:administration.html.twig');
    }

}
