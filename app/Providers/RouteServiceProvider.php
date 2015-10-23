<?php

namespace Seia\Core\Providers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Seia\Core\Model\Route;
use Seia\Core\Model\Page;

use Symfony\Component\Routing\Route as SymfonyRoute;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Seia\Core\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->bind('pages', function($id){
            return Page::find($id);
        });

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function(Router $router) {
            require app_path('Http/routes.php');

            if ($this->app->runningInConsole()) {
                return;
            }

            $request = $this->app->request;
            $uri = substr($request->getRequestUri(), 1);
            $dbRoute = Route::where('uri', '=', $uri)->first();

            if (!$dbRoute) {
                return;
            }

            $params = (!empty($dbRoute->params)) ? unserialize($dbRoute->params) : [];

            /* @var \Illuminate\Routing\Route $route */
            $router->get($uri, function() use ($dbRoute, $params) {
                $controller = $this->app->make($this->namespace . '\\' . $dbRoute->controller);
                return call_user_func_array([$controller, $dbRoute->method], $params);
            });
        });
    }
}
