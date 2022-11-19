<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function index(AuthenticationUtils $authUtils): Response
    {

        return $this->render('login/index.html.twig', [
            'loginError' => $authUtils->getLastAuthenticationError(),
            'loginUserName' => $authUtils->getLastUsername(),
        ]);
    }

    //#[Route('/logout', name: 'app_logout', methods: ['GET'])]
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
