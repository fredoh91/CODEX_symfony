<?php

namespace App\Controller;

use App\Form\RechLaboTypeForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class RechercheLaboController extends AbstractController
{
    #[Route('/recherche_labo', name: 'app_recherche_labo')]
    public function recherche_labo(Request $request): Response
    {
        
        $form= $this->createForm(RechLaboTypeForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            dump($data['dci']);
            dump($data['denomination']);
            // dd($data); 

            // return $this->redirectToRoute('app_recherche_labo'); // Adjust as needed
        }
        return $this->render('recherche_labo/recherche_labo.html.twig', [
            // 'controller_name' => 'RechercheLaboController',
            'form' => $form,
        ]);
    }
}
