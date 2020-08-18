<?php

namespace codicastudio\NovaDashboard\Examples\Widgets;

use codicastudio\ChartJsWidget\DataSet;
use codicastudio\ChartJsWidget\Gradient;
use codicastudio\ChartJsWidget\LineChartWidget;
use codicastudio\ChartJsWidget\Style;
use codicastudio\ChartJsWidget\ValueResult;
use codicastudio\NovaDashboard\Filters;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\Select;

class LineChartExample1Widget extends LineChartWidget
{

    public const STYLE = 'style';
    public const STYLE_BLUE = 'blue';
    public const STYLE_YELLOW = 'yellow';

    public function getRandomData($min = 1, $max = 100): array
    {
        return array_rand(range($min, $max), now()->month);
    }

    public function getMonthsInTheYear(): array
    {

        return array_map(static function ($month) {
            return now()->startOfMonth()->setMonth($month)->format('M');
        }, range(1, 12));

    }

    public function resolveValue(Collection $options, Filters $filters): ValueResult
    {

        $style = $options->get(self::STYLE);

        /**
         * Some basic stylish settings
         */
        $configuration = Style::make();

        if ($style === self::STYLE_YELLOW) {

            /**
             * You can either use the array syntax or a Gradient object
             */
            $colorColor = [ '#FAD961', '#F76B1C' ];
            $backgroundColor = [ '#FAD961', '#F76B1C' ];
            $configuration->pointRadius(0);

        } else {

            $colorColor = '#005bea';
            $backgroundColor = [ 'rgba(0, 91, 234,.8)', 'rgba(255,255,255,0)', Gradient::VERTICAL ];

        }


        $configuration = $configuration
            ->color($colorColor)
            ->background($backgroundColor);

        $dataSet = DataSet::make('Sample Label', $this->getRandomData(), $configuration);

        return ValueResult::make()
                          ->labels($this->getMonthsInTheYear())
                          ->addDataset($dataSet);

    }

    public function fields(): array
    {

        return array_merge([

            Select::make('Style', self::STYLE)->options([
                self::STYLE_BLUE => 'Style 1',
                self::STYLE_YELLOW => 'Style 2'
            ])

        ], parent::fields());

    }

}
