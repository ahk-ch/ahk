<?php

namespace App\Http\ViewComposers\Cms;

/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   24/11/2015
 */
use App\Ahk\Helpers\Utilities;
use Illuminate\Contracts\View\View;


class FooterComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('copyrightDate', Utilities::autoCopyright("2015"));
    }
}

