<?php

namespace app\Http\ViewComposers;

/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   24/11/2015
 */
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class HeaderComposer {

	/**
	 * Bind data to the view.
	 *
	 * @param  View $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with('locale', App::getLocale());

		if ( Auth::check() )
		{
			$view->with('user', Auth::user());
		}
	}
}