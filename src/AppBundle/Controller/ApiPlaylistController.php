<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Playlist;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiPlaylistController
{
    /**
     * @var Registry
     */
    private $doctrine;

    /**
     * ApiPlaylistController constructor.
     * @param Registry $doctrine
     */
    public function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

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

        $playlist = new Playlist();
        $playlist->setTitle($title);

        $manager = $this->doctrine->getManager();
        $manager->persist($playlist);
        $manager->flush($playlist);

        return new JsonResponse([
            'id' => $playlist->getId(),
        ]);
    }
}