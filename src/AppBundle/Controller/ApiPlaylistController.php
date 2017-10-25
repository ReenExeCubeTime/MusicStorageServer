<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiPlaylistController
{
    /**
     * @Route("/api/v1/playlist", name="api.playlist")
     */
    public function index()
    {
        return new JsonResponse([]);
    }
}