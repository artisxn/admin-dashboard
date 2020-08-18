<?php

namespace codicastudio\NovaDashboard\Examples\Views;

use codicastudio\NovaDashboard\Examples\Actions\UniqueAction;
use codicastudio\NovaDashboard\Examples\Filters\BooleanSelectFilter;
use codicastudio\NovaDashboard\Examples\Filters\SingleDateFilter;
use codicastudio\NovaDashboard\Examples\Widgets\BarChartExampleWidget;
use codicastudio\NovaDashboard\Examples\Widgets\ExampleWidgetOne;
use codicastudio\NovaDashboard\Examples\Widgets\ExampleWidgetTwo;
use codicastudio\NovaDashboard\View;
use codicastudio\SocialMediaWidget\Widgets\SocialMediaWidget;

class AnotherView extends View
{

    public function filters(): array
    {
        return [
            new SingleDateFilter(),
            new BooleanSelectFilter()
        ];
    }

    public function actions(): array
    {
        return [
            new UniqueAction(),
        ];
    }

    public function widgets(): array
    {
        return [
            new ExampleWidgetOne(),
            new ExampleWidgetTwo(),
            new BarChartExampleWidget()
        ];
    }

}
