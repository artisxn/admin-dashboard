<?php

namespace codicastudio\NovaDashboard\Examples\Widgets;

use codicastudio\NovaDashboard\Filters;
use codicastudio\ValueWidget\Widgets\ValueResult;
use codicastudio\ValueWidget\Widgets\ValueWidget;
use Illuminate\Support\Collection;

class ConversionRate extends ValueWidget
{
    public function resolveValue(Collection $options, Filters $filters): ValueResult
    {
        return ValueResult::make()
                          ->currentValue(random_int(0, 100))
                          ->previousValue(random_int(0, 100));
    }
}
