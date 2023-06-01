<?php

 namespace App\Controller;

use App\Utils\Globals;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    private Globals $globals; 

    public function __construct(Globals $globals)
    {
        $this->globals = $globals;
    }


    /**
     * @Route("/", name="home")
     * @return JsonResponse
     */
    public function home():JsonResponse
    {
        return $this->globals->success([
            "message" => "Bienvenue sur notre API Intelligent(e)"
        ]);
    }


    /**
     * @Route("/error", name="error")
     * @return JsonResponse
     */
    public function error():JsonResponse
    {
        return $this->globals->error();
    }
}


?>