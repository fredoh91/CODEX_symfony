<?php

namespace App\Controller;

use App\Entity\VUUtil;
use App\Form\RechLaboTypeForm;
use App\Service\ExcelExporter;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CODEXPresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class RechercheLaboController extends AbstractController
{
    private $codexPresentationRepository;

    public function __construct(CODEXPresentationRepository $codexPresentationRepository)
    {
        $this->codexPresentationRepository = $codexPresentationRepository;
    }
    
    #[Route('/recherche_labo', name: 'app_recherche_labo')]
    public function recherche_labo(Request $request, ManagerRegistry $doctrine, ExcelExporter $excelExporter): Response
    {
        $form = $this->createForm(RechLaboTypeForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() ) {
            $data = $form->getData();
            if ($form->get('recherche')->isClicked()) {
                if ($form->isValid()) {
                    [$medics, $NbMedics] = $this->getMedics($doctrine, $data);
                }
            }
            if ($form->get('exportExcel')->isClicked()) {
                [$medics, $NbMedics] = $this->getMedics($doctrine, $data);
                if (empty($NbMedics)) {
                    $this->addFlash('warning', 'Merci de lancer une recherche avant de faire cet export Excel');
                    return $this->redirectToRoute('app_recherche_labo');
                }
                return $excelExporter->export($medics);
            }
            if ($form->get('reset')->isClicked()) {
                return $this->redirectToRoute('app_recherche_labo');
            }
        }
        return $this->render('recherche_labo/recherche_labo.html.twig', [
            'form' => $form,
            'medics' => $medics ?? [],
            'NbMedics' => $NbMedics ?? 0,
        ]);
    }

    /**
     * Regroupe les médicaments par codeCIS à partir des données du formulaire
     */
    private function getMedics(ManagerRegistry $doctrine, array $data): array
    {
        $results = $doctrine
            ->getRepository(VUUtil::class)
            ->findByDenoOrBySub($data['dci'], $data['denomination']);
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
                    'commercialise' => $this->codexPresentationRepository->auMoinsUnePresentationCommercialisee($row['codeVU']),
                ];
            }
            $medics[$cis]['substances'][] = $row['nomSubstance'];
        }
        $NbMedics = count($medics);
        return [$medics, $NbMedics];
    }
}
