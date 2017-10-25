<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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
    public function create(Request $request)
    {
        $title = $request->request->get('title');

        return new JsonResponse([
            'title' => $title,
        ]);
    }
}