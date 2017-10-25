<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiPlaylistController
{
    /**
     * @Route("/api/v1/playlist", name="api.playlist.default", methods={"GET"})
     */
    public function index()
    {
        return new JsonResponse([]);
    }

    /**
     * @Route("/api/v1/playlist", name="api.playlist.create", methods={"POST"})
     */
    public function create()
    {
        return new JsonResponse([]);
    }
}