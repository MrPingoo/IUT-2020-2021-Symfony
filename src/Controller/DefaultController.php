<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller
 *
 * @Route("/admin/users", name="app_admin_")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Home: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/new/", name="new")
     */
    public function new(): Response
    {
        die('2');
    }

    /**
     * @Route("/show/{id}", name="show", requirements={"id"="\d+"})
     */
    public function show($id): Response
    {
        die($id);
    }
}