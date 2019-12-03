<?php

namespace App\Controller;

use App\Entity\Adult;
use App\Entity\Children;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        $donald = new Adult();
        $daisy = new Adult();
        $riri = new Children();
        $fifi = new Children();

        $donald->walk();
        $riri->walk();
        $daisy->walk();
        $fifi->walk();

        dump('Donald a parcouru ' . $donald->getDistance() . 'km' . PHP_EOL);
        dump('Daisy a parcouru ' . $donald->getDistance() . 'km' . PHP_EOL);
        dump('Riri a parcouru ' . $donald->getDistance() . 'km' . PHP_EOL);
        dump('Fifi a parcouru ' . $donald->getDistance() . 'km' . PHP_EOL);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
