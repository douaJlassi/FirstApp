<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ManualController extends AbstractController
{
    #[Route('/manual', name: 'manual_hello')]
    public function Hello(): Response{
        return new Response("Hello everybody!");
    }
}
