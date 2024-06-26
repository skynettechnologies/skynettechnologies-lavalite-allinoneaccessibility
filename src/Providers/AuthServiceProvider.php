<?php

namespace Skynettechnologies\Allinoneaccessibility\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Allinoneaccessibility policy
        \Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility::class
        => \Skynettechnologies\Allinoneaccessibility\Policies\AllinoneaccessibilityPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
