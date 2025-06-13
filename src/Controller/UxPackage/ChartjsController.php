<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\UxPackage;

// use App\Service\UxPackageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class ChartjsController extends AbstractController
{
    #[Route('/chartjs', name: 'app_chartjs')]
    public function __invoke(
        ChartBuilderInterface $chartBuilder
    ): Response
    {
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Cookies eaten 🍪',
                    'backgroundColor' => 'rgb(255, 99, 132, .4)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [2, 10, 5, 18, 20, 30, 45],
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Km walked 🏃‍♀️',
                    'backgroundColor' => 'rgba(45, 220, 126, .4)',
                    'borderColor' => 'rgba(45, 220, 126)',
                    'data' => [10, 15, 4, 3, 25, 41, 25],
                    'tension' => 0.4,
                ],
            ],
        ];

        $options = [
            'maintainAspectRatio' => false,
        ];

        $lineChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_LINE);
        $lineChart->setData($data);
        $lineChart->setOptions($options);

        $barChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $barChart->setData($data);
        $barChart->setOptions($options);

        $pieChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_PIE);
        $pieChart->setData($data);
        $pieChart->setOptions($options);

        $doughnutChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_DOUGHNUT);
        $doughnutChart->setData($data);
        $doughnutChart->setOptions($options);

        $radarChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_RADAR);
        $radarChart->setData($data);
        $radarChart->setOptions($options);

        // Exemple de graphique en polar area
        $polarAreaData = [
            'labels' => ['Red', 'Green', 'Yellow', 'Grey', 'Blue'],
            'datasets' => [
                [
                    'data' => [11, 16, 7, 3, 14],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 205, 86, 0.8)',
                        'rgba(201, 203, 207, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                    ],
                ],
            ],
        ];

        $polarAreaChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_POLAR_AREA);
        $polarAreaChart->setData($polarAreaData);
        $polarAreaChart->setOptions($options);

        // Exemple de graphique en barres empilées
        $stackedBarData = [
            'labels' => ['Jan', 'Fév', 'Mar', 'Avr', 'Mai'],
            'datasets' => [
                [
                    'label' => 'Ventes 2023',
                    'data' => [65, 59, 80, 81, 56],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.8)',
                    'stack' => 'Stack 0',
                ],
                [
                    'label' => 'Ventes 2024',
                    'data' => [28, 48, 40, 19, 86],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.8)',
                    'stack' => 'Stack 0',
                ],
            ],
        ];

        $stackedBarOptions = [
            'maintainAspectRatio' => false,
            'scales' => [
                'x' => [
                    'stacked' => true,
                ],
                'y' => [
                    'stacked' => true,
                ],
            ],
        ];

        $stackedBarChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $stackedBarChart->setData($stackedBarData);
        $stackedBarChart->setOptions($stackedBarOptions);

        // Exemple de graphique en ligne avec annotations
        $annotatedLineData = [
            'labels' => ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
            'datasets' => [
                [
                    'label' => 'Température (°C)',
                    'data' => [12, 19, 15, 17, 22, 23, 20],
                    'borderColor' => 'rgb(75, 192, 192)',
                    'tension' => 0.4,
                    'fill' => true,
                ],
            ],
        ];

        $annotatedLineOptions = [
            'maintainAspectRatio' => false,
            'plugins' => [
                'annotation' => [
                    'annotations' => [
                        'line1' => [
                            'type' => 'line',
                            'yMin' => 20,
                            'yMax' => 20,
                            'borderColor' => 'rgb(255, 99, 132)',
                            'borderWidth' => 2,
                            'label' => [
                                'content' => 'Seuil de chaleur',
                                'enabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $annotatedLineChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_LINE);
        $annotatedLineChart->setData($annotatedLineData);
        $annotatedLineChart->setOptions($annotatedLineOptions);

        // Exemple de graphique en barres horizontales
        $horizontalBarData = [
            'labels' => ['Python', 'JavaScript', 'PHP', 'Java', 'C#', 'Ruby'],
            'datasets' => [
                [
                    'label' => 'Popularité des langages',
                    'data' => [85, 90, 75, 80, 70, 65],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.8)',
                ],
            ],
        ];

        $horizontalBarOptions = [
            'maintainAspectRatio' => false,
            'indexAxis' => 'y',
        ];

        $horizontalBarChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $horizontalBarChart->setData($horizontalBarData);
        $horizontalBarChart->setOptions($horizontalBarOptions);

        // Exemple de graphique en bulles
        $bubbleData = [
            'datasets' => [
                [
                    'label' => 'Équipe A',
                    'data' => [
                        ['x' => 20, 'y' => 30, 'r' => 15],
                        ['x' => 40, 'y' => 10, 'r' => 10],
                        ['x' => 15, 'y' => 50, 'r' => 20],
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.8)',
                ],
                [
                    'label' => 'Équipe B',
                    'data' => [
                        ['x' => 30, 'y' => 20, 'r' => 12],
                        ['x' => 25, 'y' => 40, 'r' => 18],
                        ['x' => 45, 'y' => 15, 'r' => 8],
                    ],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.8)',
                ],
            ],
        ];

        $bubbleOptions = [
            'maintainAspectRatio' => false,
            'scales' => [
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Score',
                    ],
                ],
                'y' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Performance',
                    ],
                ],
            ],
        ];

        $bubbleChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BUBBLE);
        $bubbleChart->setData($bubbleData);
        $bubbleChart->setOptions($bubbleOptions);

        // Exemple de graphique en ligne avec gradient
        $gradientLineData = [
            'labels' => ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
            'datasets' => [
                [
                    'label' => 'Revenus',
                    'data' => [12000, 19000, 15000, 25000, 22000, 30000],
                    'borderColor' => 'rgb(75, 192, 192)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
        ];

        $gradientLineOptions = [
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'callback' => 'function(value) { return value + " €"; }',
                    ],
                ],
            ],
        ];

        $gradientLineChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_LINE);
        $gradientLineChart->setData($gradientLineData);
        $gradientLineChart->setOptions($gradientLineOptions);

        // Exemple de graphique en barres avec échelle logarithmique
        $logarithmicData = [
            'labels' => ['100', '1K', '10K', '100K', '1M', '10M'],
            'datasets' => [
                [
                    'label' => 'Utilisateurs',
                    'data' => [100, 1000, 10000, 100000, 1000000, 10000000],
                    'backgroundColor' => 'rgba(153, 102, 255, 0.8)',
                ],
            ],
        ];

        $logarithmicOptions = [
            'maintainAspectRatio' => false,
            'scales' => [
                'y' => [
                    'type' => 'logarithmic',
                    'title' => [
                        'display' => true,
                        'text' => 'Échelle logarithmique',
                    ],
                ],
            ],
        ];

        $logarithmicChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $logarithmicChart->setData($logarithmicData);
        $logarithmicChart->setOptions($logarithmicOptions);

        // Exemple de graphique en anneau avec pourcentages
        $percentageData = [
            'labels' => ['Complété', 'En cours', 'Non commencé'],
            'datasets' => [
                [
                    'data' => [65, 25, 10],
                    'backgroundColor' => [
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 205, 86, 0.8)',
                        'rgba(255, 99, 132, 0.8)',
                    ],
                    'borderWidth' => 0,
                ],
            ],
        ];

        $percentageOptions = [
            'maintainAspectRatio' => false,
            'cutout' => '70%',
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
                'tooltip' => [
                    'callbacks' => [
                        'label' => 'function(context) { return context.label + ": " + context.raw + "%"; }',
                    ],
                ],
            ],
        ];

        $percentageChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_DOUGHNUT);
        $percentageChart->setData($percentageData);
        $percentageChart->setOptions($percentageOptions);

        // Exemple de graphique en ligne avec zones de performance
        $performanceData = [
            'labels' => ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
            'datasets' => [
                [
                    'label' => 'Performance',
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                    'borderColor' => 'rgb(75, 192, 192)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => true,
                ],
            ],
        ];

        $performanceOptions = [
            'maintainAspectRatio' => false,
            'plugins' => [
                'annotation' => [
                    'annotations' => [
                        'box1' => [
                            'type' => 'box',
                            'yMin' => 80,
                            'yMax' => 100,
                            'backgroundColor' => 'rgba(75, 192, 192, 0.1)',
                            'borderColor' => 'rgba(75, 192, 192, 0.5)',
                            'label' => [
                                'content' => 'Zone optimale',
                                'enabled' => true,
                            ],
                        ],
                        'box2' => [
                            'type' => 'box',
                            'yMin' => 0,
                            'yMax' => 40,
                            'backgroundColor' => 'rgba(255, 99, 132, 0.1)',
                            'borderColor' => 'rgba(255, 99, 132, 0.5)',
                            'label' => [
                                'content' => 'Zone critique',
                                'enabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $performanceChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_LINE);
        $performanceChart->setData($performanceData);
        $performanceChart->setOptions($performanceOptions);

        // Exemple de graphique en barres avec échelle de temps
        $timeData = [
            'labels' => ['Jan 2024', 'Fév 2024', 'Mar 2024', 'Avr 2024', 'Mai 2024', 'Juin 2024'],
            'datasets' => [
                [
                    'label' => 'Ventes',
                    'data' => [1200, 1900, 1500, 2500, 2200, 3000],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.8)',
                ],
            ],
        ];

        $timeOptions = [
            'maintainAspectRatio' => false,
            'scales' => [
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Date',
                    ],
                ],
                'y' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Ventes',
                    ],
                    'beginAtZero' => true,
                ],
            ],
            'plugins' => [
                'tooltip' => [
                    'callbacks' => [
                        'label' => 'function(context) { return context.raw + " €"; }',
                    ],
                ],
            ],
        ];

        $timeChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $timeChart->setData($timeData);
        $timeChart->setOptions($timeOptions);

        // Exemple de graphique en radar avec plusieurs métriques
        $metricsData = [
            'labels' => ['Performance', 'Qualité', 'Sécurité', 'Maintenabilité', 'Évolutivité', 'Documentation'],
            'datasets' => [
                [
                    'label' => 'Projet A',
                    'data' => [85, 90, 75, 80, 70, 65],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'pointBackgroundColor' => 'rgba(255, 99, 132, 1)',
                ],
                [
                    'label' => 'Projet B',
                    'data' => [70, 85, 90, 75, 85, 80],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'pointBackgroundColor' => 'rgba(54, 162, 235, 1)',
                ],
            ],
        ];

        $metricsOptions = [
            'maintainAspectRatio' => false,
            'scales' => [
                'r' => [
                    'angleLines' => [
                        'display' => true,
                    ],
                    'suggestedMin' => 0,
                    'suggestedMax' => 100,
                ],
            ],
        ];

        $metricsChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_RADAR);
        $metricsChart->setData($metricsData);
        $metricsChart->setOptions($metricsOptions);

        // Exemple de graphique en barres avec progression
        $progressData = [
            'labels' => ['Étape 1', 'Étape 2', 'Étape 3', 'Étape 4', 'Étape 5'],
            'datasets' => [
                [
                    'label' => 'Progression',
                    'data' => [100, 80, 60, 40, 20],
                    'backgroundColor' => [
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(75, 192, 192, 0.4)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(75, 192, 192, 0.1)',
                    ],
                ],
            ],
        ];

        $progressOptions = [
            'maintainAspectRatio' => false,
            'indexAxis' => 'y',
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
                'tooltip' => [
                    'callbacks' => [
                        'label' => 'function(context) { return context.raw + "% complété"; }',
                    ],
                ],
            ],
        ];

        $progressChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $progressChart->setData($progressData);
        $progressChart->setOptions($progressOptions);

        // Exemple de graphique en camembert avec éclatement
        $explodedData = [
            'labels' => ['Rouge', 'Vert', 'Jaune', 'Gris', 'Bleu'],
            'datasets' => [
                [
                    'data' => [12, 19, 3, 5, 2],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 205, 86, 0.8)',
                        'rgba(201, 203, 207, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                    ],
                    'offset' => [0, 0, 30, 0, 0],
                ],
            ],
        ];

        $explodedOptions = [
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                ],
            ],
        ];

        $explodedChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_PIE);
        $explodedChart->setData($explodedData);
        $explodedChart->setOptions($explodedOptions);

        return $this->render('ux_packages/chartjs.html.twig', [
            'lineChart' => $lineChart,
            'barChart' => $barChart,
            'pieChart' => $pieChart,
            'doughnutChart' => $doughnutChart,
            'radarChart' => $radarChart,
            'polarAreaChart' => $polarAreaChart,
            'stackedBarChart' => $stackedBarChart,
            'annotatedLineChart' => $annotatedLineChart,
            'horizontalBarChart' => $horizontalBarChart,
            'bubbleChart' => $bubbleChart,
            'gradientLineChart' => $gradientLineChart,
            'logarithmicChart' => $logarithmicChart,
            'percentageChart' => $percentageChart,
            'performanceChart' => $performanceChart,
            'timeChart' => $timeChart,
            'metricsChart' => $metricsChart,
            'progressChart' => $progressChart,
            'explodedChart' => $explodedChart,
        ]);
    }
}
