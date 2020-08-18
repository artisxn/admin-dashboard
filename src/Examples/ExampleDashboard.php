<?php

namespace codicastudio\NovaDashboard\Examples;

use codicastudio\NovaDashboard\Dashboard;
use codicastudio\NovaDashboard\Examples\Views\AnotherView;
use codicastudio\NovaDashboard\Examples\Views\ProductsSalesView;

class ExampleDashboard extends Dashboard
{

    public static string $title = 'Example Dashboard';

    public function views(): array
    {
        return [
            AnotherView::make()->editable(),
            ProductsSalesView::make(),
        ];
    }

    public function options(): array
    {
        return [
            'expandFilterByDefault' => true,
            'grid' => [
                'compact' => true,
            ]
        ];
    }

}
