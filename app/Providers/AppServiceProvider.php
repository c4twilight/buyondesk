<?php

namespace App\Providers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Request $request) {
		View::composer('*', function ($view) {
			$view->with('categories', category::all());
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {

	}
}
