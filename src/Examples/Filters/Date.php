<?php

namespace codicastudio\NovaDashboard\Examples\Filters;

use codicastudio\RangeInputFilter\RangeDateFilter;
use Illuminate\Http\Request;

class Date extends RangeDateFilter
{

    public function apply(Request $request, $query, $value)
    {
    }

    public function options(Request $request): array
    {
        return [
            'fromPlaceholder' => today()->startOfMonth(50)->format('Y/m/d'),
            'toPlaceholder' => today()->endOfMonth(25)->format('Y/m/d'),
            'fullWidth' => true,
        ];
    }

}
