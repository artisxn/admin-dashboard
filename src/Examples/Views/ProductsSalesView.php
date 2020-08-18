<?php

namespace codicastudio\NovaDashboard\Examples\Views;

use codicastudio\NovaDashboard\Examples\Actions\DemoActionOne;
use codicastudio\NovaDashboard\Examples\Actions\DemoActionTwo;
use codicastudio\NovaDashboard\Examples\Filters\Category;
use codicastudio\NovaDashboard\Examples\Filters\Date;
use codicastudio\NovaDashboard\Examples\Filters\Quantity;
use codicastudio\NovaDashboard\Examples\Widgets\BarChartExampleWidget;
use codicastudio\NovaDashboard\Examples\Widgets\ConversionRate;
use codicastudio\NovaDashboard\Examples\Widgets\LineChartExample1Widget;
use codicastudio\NovaDashboard\Examples\Widgets\LineChartExample2Widget;
use codicastudio\NovaDashboard\Examples\Widgets\ProductsInStock;
use codicastudio\NovaDashboard\Examples\Widgets\TotalSales;
use codicastudio\NovaDashboard\View;
use codicastudio\SocialMediaWidget\Widgets\SocialMediaWidget;

class ProductsSalesView extends View
{

    public function filters(): array
    {
        return [
            new Date(),
            new Quantity(),
            new Category(),
        ];
    }

    public function actions(): array
    {
        return [
            new DemoActionOne(),
            new DemoActionTwo()
        ];
    }

    public function widgets(): array
    {
        return [
//            new TotalSales(0, 0, 2, 1, [
//                TotalSales::OPTION_PREFIX => '$',
//                TotalSales::OPTION_HELP => 'This is awesome inst it?',
//            ]),
//            new ProductsInStock(2, 0, 2, 1),
//            new ConversionRate(4, 0, 2, 1, [
//                ConversionRate::OPTION_SUFFIX => '%',
//            ]),
//            new LineChartExample1Widget(0, 1, 2, 1, [
//                LineChartExample1Widget::TITLE => 'Example 1',
//                LineChartExample1Widget::SHOW_LEGEND => false,
//            ]),
//            new LineChartExample1Widget(2, 1, 4, 1, [
//                LineChartExample1Widget::TITLE => 'Example 2',
//                LineChartExample1Widget::SHOW_LEGEND => false,
//                LineChartExample1Widget::STYLE => LineChartExample1Widget::STYLE_YELLOW,
//                LineChartExample1Widget::PADDING => [
//                    LineChartExample1Widget::PADDING_TOP => 45,
//                    LineChartExample1Widget::PADDING_LEFT => 25,
//                    LineChartExample1Widget::PADDING_RIGHT => 25,
//                    LineChartExample1Widget::PADDING_BOTTOM => 5,
//                ],
//                LineChartExample1Widget::HORIZONTAL_AXIS => [
//                    LineChartExample1Widget::AXIS_DISPLAY => true,
//                    LineChartExample1Widget::AXIS_SHOW_GRID_LINES => true,
//                    LineChartExample1Widget::AXIS_SHOW_GRID_LINES_BORDER => true
//                ],
//                LineChartExample1Widget::VERTICAL_AXIS => [
//                    LineChartExample1Widget::AXIS_DISPLAY => false,
//                    LineChartExample1Widget::AXIS_SHOW_GRID_LINES => false,
//                    LineChartExample1Widget::AXIS_SHOW_GRID_LINES_BORDER => false
//                ],
//            ]),
//            new LineChartExample2Widget(2, 2, 4, 1, [
//                LineChartExample1Widget::TITLE => 'Example 2',
//                LineChartExample1Widget::LEGEND_POSITIONING => LineChartExample1Widget::LEGEND_POSITIONING_TOP,
//                LineChartExample1Widget::LEGEND_ALIGNMENT => LineChartExample1Widget::LEGEND_ALIGNMENT_END,
//                LineChartExample1Widget::PADDING => [
//                    LineChartExample1Widget::PADDING_TOP => 10
//                ]
//            ]),
//            new BarChartExampleWidget(0, 2, 2, 1, [
//                BarChartExampleWidget::TITLE => 'Example 3',
//                BarChartExampleWidget::SHOW_LEGEND => false,
//                BarChartExampleWidget::PADDING => [
//                    BarChartExampleWidget::PADDING_TOP => 50
//                ]
//            ]),
            new BarChartExampleWidget(0, 3, 6, 2),
        ];
    }

}
