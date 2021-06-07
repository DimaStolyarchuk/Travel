<?php

namespace App\Http\ViewComposers;

use App\Vacancy;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view)
    {
        $vacancies = Vacancy::get();
        $view->with('vacancies', $vacancies);
    }
}
