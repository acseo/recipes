<?php

namespace App\Controller\ApiWp;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('', name: 'default_')]
class DefalutController extends AbstractController
{
    #[Route('', name: 'index')]
    public function index(): JsonResponse
    {
        return $this->json(['message' => 'You can now override this controller to set your own logic !']);
    }
}
