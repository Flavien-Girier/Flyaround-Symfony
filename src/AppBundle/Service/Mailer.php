<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 22/05/18
 * Time: 16:07
 */

namespace AppBundle\Service;


class Mailer
{
    protected $mailer;
    protected $templating;


    /**
     * Mailer constructor.
     * @param \Swift_Mailer $mailer
     * @param \Twig_Environment $templating
     */
    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    public function sendMail($from, $to, $subject, $name, $flight)
    {
        $mail = \Swift_Message::newInstance();

        $mail
            ->setFrom($from)
            ->setTo($to)
            ->setSubject($subject)
            ->setBody($this->templating->render('mail/mailContent.html.twig', ['name' => $name, 'flight' => $flight]), 'text/html');


        $this->mailer->send($mail);
    }

}