<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Category' => 'App\Policies\CategoryPolicy',
        'App\Sell' => 'App\Policies\SellPolicy',
        'App\Product' => 'App\Policies\ProductPolicy',
        'App\Provider' => 'App\Policies\ProviderPolicy',
        'App\Command' => 'App\Policies\CommandPolicy',
        'App\Company' => 'App\Policies\CompanyPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
