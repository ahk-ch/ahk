<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		# AHK
		view()->composer('ahk._partials.header', 'App\Http\ViewComposers\AHK\HeaderComposer');
		view()->composer('ahk._partials.header_industries', 'App\Http\ViewComposers\AHK\HeaderComposer');
		view()->composer('ahk._partials.footer', 'App\Http\ViewComposers\AHK\FooterComposer');
		view()->composer('ahk.layouts.master', 'App\Http\ViewComposers\AHK\MasterComposer');

		################# Cms ###############
		view()->composer('cms._partials.header', 'App\Http\ViewComposers\Cms\HeaderComposer');
		view()->composer('cms._partials.footer', 'App\Http\ViewComposers\Cms\FooterComposer');
		view()->composer('cms._partials.right_sidebar', 'App\Http\ViewComposers\Cms\RightSideBarComposer');
		view()->composer('cms._partials.left_sidebar', 'App\Http\ViewComposers\Cms\LeftSideBarComposer');

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
