<?php

namespace FaultyProductBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FaultyReportMail extends ContainerAwareCommand
{
    protected function configure(){
        $this
            ->setName('faulty:report')
            ->setDescription('Send report by mail')
            ->setHelp("Nothing :)")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $faulties = $this->getContainer()->get('faulty.repository.faulty')->findByLastReception();
        $faultyMails = $this->getContainer()->get('faulty.repository.mail')->findAll();

        $mails = [];
        foreach ($faultyMails as $faultyMail) {
            $mails[] = $faultyMail->getMail();
        }

        if(sizeof($faulties) > 0) {
            $message = \Swift_Message::newInstance()
                ->setSubject('Défectueux à déclarer')
                ->setFrom('contact@cadeau-maestro.com')
                ->setTo($mails)
                ->setBody(
                    $this->getContainer()->get('templating')->render(
                        '@FaultyProduct/mail/report.html.twig',
                        [
                            'faulties' => $faulties
                        ]
                    ),
                    'text/html'
                );

            $this->getContainer()->get('mailer')->send($message);
        }

        $output->writeln('All is done !');
    }
}