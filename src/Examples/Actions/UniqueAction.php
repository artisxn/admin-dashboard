<?php

namespace codicastudio\NovaDashboard\Examples\Actions;

use codicastudio\NovaDashboard\Action;
use codicastudio\NovaDashboard\Filters;
use codicastudio\SocialMediaWidget\Widgets\SocialMediaWidget;
use Laravel\Nova\Fields\ActionFields;

class UniqueAction extends Action
{

    public function execute(ActionFields $fields, Filters $filters): ?array
    {
        return self::message('This action is only available on this view.');
    }

}
