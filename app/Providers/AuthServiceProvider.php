<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $permissions=Permission::with('roles')->get();
        foreach($permissions as $permission){
        Gate::define($permission->nome, function(User $user) use ($permission){
                foreach($user->roles as $role){
                if($role->permissions->contains('nome', $permission->nome)){
                    return true;
                }
            }
                return false;
            });
        }
        //
    }
}
