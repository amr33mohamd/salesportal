<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/builder-accounts', 'BuilderAccounts@index');
    $router->get('/builder-leads', 'BuilderLeads@index');

    $router->resource('users', UserController::class);
    $router->resource('leads', leadsController::class);
    $router->resource('calls', callsController::class);
    $router->resource('meetings', meetingsController::class);
    $router->resource('tasks', tasksController::class);
    $router->resource('industries', industryController::class);
    $router->resource('hear_about_uses', hear_about_usController::class);
    $router->resource('application_types', application_typesController::class);
    $router->resource('contacts', contactsController::class);
    $router->resource('currencies', currenciesController::class);
    $router->resource('education_qualifications', education_qualificationsController::class);
    $router->resource('lead_statuses', lead_statusController::class);
    $router->resource('nationalities', nationalityController::class);
    $router->resource('opportunities', opportunitiesController::class);
    $router->resource('sales_stages', sales_stageController::class);
    $router->resource('traffic_mediums', traffic_mediumsController::class);
    $router->resource('traffic_sources', traffic_sourceController::class);
    $router->resource('designed-milestones', DesignedMilestonesController::class);

});
