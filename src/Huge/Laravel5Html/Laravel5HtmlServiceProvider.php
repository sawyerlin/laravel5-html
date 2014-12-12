<?php namespace Huge\Laravel5Html;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;
use View;

class Laravel5HtmlServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('huge/laravel5-html');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLaravel5FormBuilder();

        $this->registerLaravel5HtmlBuilder();

        $this->app->alias('laravel5-html.form', 'Illuminate\Html\Laravel5FormBuilder');

        $this->app->alias('laravel5-html.html', 'Illuminate\Html\Laravel5HtmlBuilder');
    }

    protected function registerLaravel5FormBuilder() {

        $this->app->bindShared('laravel5-html.form', function($app) {

            $form = new Laravel5FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);

        });

    }

    protected function registerLaravel5HtmlBuilder() {

        $this->app->bindShared('laravel5-html.html', function($app) {

            return new Laravel5HtmlBuilder($app['url']);

        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel5-html.html', 'laravel5-html.form'];
    }
}
