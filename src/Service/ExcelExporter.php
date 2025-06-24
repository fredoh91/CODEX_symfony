<?php

namespace App\Service;

use DateTime;
use DateTimeImmutable;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class ExcelExporter
{
    public function export(array $data): BinaryFileResponse
    {


        $date = new DateTimeImmutable();
        $now = $date->format('Ymd_His');
        $nomFichierExcel= "RechercheLabo_" . $now . ".xlsx";
        $repExport = "./Temp/RechercheLabo/";

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Dénomination');
        $sheet->setCellValue('B1', 'Substance(s)');
        $sheet->setCellValue('C1', 'Exploitant');
        $sheet->setCellValue('D1', 'Titulaire');
        $sheet->setCellValue('E1', 'Statut commercialisation');

        $columnWidths = [
            'A' => 60,  // Dénomination
            'B' => 85,  // Substance
            'C' => 60,  // Exploitant
            'D' => 60,  // Titulaire
            'E' => 38,  // Statut commercialisation
        ];
        foreach ($columnWidths as $column => $width) {
            $sheet->getColumnDimension($column)->setWidth($width);
        }
        $baseHeight = 15; // Hauteur de ligne de base en points
        $additionalHeight = 15; // Hauteur additionnelle pour substance et EI

        $row = 2;

        foreach ($data as $medic) {
            $substancesStr = is_array($medic['substances']) ? implode(', ', $medic['substances']) : $medic['substances'];
            $sheet->setCellValue('A' . $row, $medic['nomVU']);
            $sheet->setCellValue('B' . $row, $substancesStr);
            $sheet->setCellValue('C' . $row, $medic['nomActeurLong']);
            $sheet->setCellValue('D' . $row, $medic['nomContactLibra']);
            // $sheet->setCellValue('E' . $row, $medic['commercialise']);
            $sheet->setCellValue('E' . $row, $medic['commercialise'] ? 'Commercialisé' : 'Non commercialisé ou pas d\'information');

            // Ajustement de la hauteur de ligne
            $sheet->getRowDimension($row)->setRowHeight($baseHeight + ($additionalHeight * substr_count($substancesStr, "\n")));

            $row++;
        }

        ////////////////////////////////////
        // Mise en forme du fichier Excel //
        ////////////////////////////////////
        
        // On met la premiere ligne en gris
        for($col = 'A'; $col != 'F'; $col++) {
            $sheet->getStyle($col . '1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('D6DCE1');
        }
        
        // Centrage horizontal et vertical des titres
        $sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:E1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

        // Ajout du filtre automatique
        $sheet->setAutoFilter(
            $sheet->calculateWorksheetDimension()
        );
        
        // On freeze la ligne de titre de colonne
        $sheet->freezePane('A2');
        
        // On modifie le nom de l'onglet
        $sheet->setTitle("Liste laboratoires"); 
        // On se positionne sur la cellule en haut à gauche
        $sheet->setSelectedCell('A2');

        $writer = new Xlsx($spreadsheet);
        
        // le répertoire d'export existe-t-il ?
        if (!is_dir($repExport)) {
            mkdir($repExport, 0777, true);
        }

        $writer->save($repExport . $nomFichierExcel);

        // Retourne une réponse de téléchargement
        return new BinaryFileResponse(
            $repExport . $nomFichierExcel,
            200,
            [
                'Content-Disposition' => (new ResponseHeaderBag())
                    ->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $nomFichierExcel)
            ]
        );
    }
}
