<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class UserDaysTrendChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->title('Frekvencia zapisovania dni')
            ->labels(['Pondelok', 'Utorok', 'Streda', 'Štvrtok', 'Piatok', 'Sobota', 'Nedeľa'])
            ->dataset('Počty dni', 'bar', ['10','5','10','30','10','15','10'])
            ->options([
                'color' => ['#FF5733', '#33FF57', '#3357FF', '#F3FF33', '#FF33A1', '#33FFF5', '#F5FF33'],
                'backgroundColor' => '#3357FF',
            ]);
    }
}
