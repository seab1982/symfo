<?php

namespace App\Controller;

use App\src\Repository\DataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    /**
     * @Route("/api/data/get", name="get_data", methods={"GET"})
     */
    public function getData(DataRepository $dataRepository): JsonResponse
    {
        return $this->json($dataRepository->data());
    }
    
} 