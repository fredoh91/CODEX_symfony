<?php

namespace App\Controller;

use App\Entity\VUUtil;
use App\Form\RechLaboTypeForm;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class RechercheLaboController extends AbstractController
{
    #[Route('/recherche_labo', name: 'app_recherche_labo')]
    public function recherche_labo(Request $request, ManagerRegistry $doctrine): Response
    {

        $form = $this->createForm(RechLaboTypeForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            $results = $doctrine
                ->getRepository(VUUtil::class)
                ->findByDenoOrBySub($data['dci'], $data['denomination']);

            // Regroupement par codeCIS
            $medics = [];
            foreach ($results as $row) {
                $cis = $row['codeCIS'];
                if (!isset($medics[$cis])) {
                    $medics[$cis] = [
                        'nomVU' => $row['nomVU'],
                        'dbo_Autorisation_libAbr' => $row['dbo_Autorisation_libAbr'],
                        'dbo_ClasseATC_libAbr' => $row['dbo_ClasseATC_libAbr'],
                        'dbo_ClasseATC_libCourt' => $row['dbo_ClasseATC_libCourt'],
                        'dbo_StatutSpeci_libAbr' => $row['dbo_StatutSpeci_libAbr'],
                        'codeVU' => $row['codeVU'],
                        'codeCIS' => $row['codeCIS'],
                        'codeDossier' => $row['codeDossier'],
                        'nomContactLibra' => $row['nomContactLibra'],
                        'adresseContact' => $row['adresseContact'],
                        'adresseCompl' => $row['adresseCompl'],
                        'codePost' => $row['codePost'],
                        'nomVille' => $row['nomVille'],
                        'telContact' => $row['telContact'],
                        'faxContact' => $row['faxContact'],
                        'nomActeurLong' => $row['nomActeurLong'],
                        'adresse' => $row['adresse'],
                        'adresseComplExpl' => $row['adresseComplExpl'],
                        'codePostExpl' => $row['codePostExpl'],
                        'nomVilleExpl' => $row['nomVilleExpl'],
                        'tel' => $row['tel'],
                        'fax' => $row['fax'],
                        'codeContact' => $row['codeContact'],
                        'codeActeur' => $row['codeActeur'],
                        'libRechDenomination' => $row['libRechDenomination'],
                        'substances' => [],
                    ];
                }
                $medics[$cis]['substances'][] = $row['nomSubstance'];
            }
            $NbMedics = count($medics);
            // return $this->redirectToRoute('app_recherche_labo'); // Adjust as needed
        }
        return $this->render('recherche_labo/recherche_labo.html.twig', [
            // 'controller_name' => 'RechercheLaboController',
            'form' => $form,
            'medics' => $medics ?? [],
            'NbMedics' => $NbMedics ?? 0,
        ]);
    }
}
