<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Playlist;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiPlaylistController extends Controller
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

        $manager = $this->getDoctrine()->getManager();

        $playlist = new Playlist();
        $playlist->setTitle($title);

        $manager->persist($playlist);
        $manager->flush($playlist);

        return new JsonResponse([
            'id' => $playlist->getId(),
        ]);
    }
}