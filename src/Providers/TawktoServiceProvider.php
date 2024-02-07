<?php

namespace MicroweberPackages\Modules\Tawkto\Providers;

use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use MicroweberPackages\Module\Facades\ModuleAdmin;
use MicroweberPackages\Modules\Tawkto\Http\Livewire\Admin\AdminTawktoComponent;
use MicroweberPackages\Modules\Tawkto\Http\Livewire\TawktoSettingsComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class TawktoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('microweber-module-tawkto');
        $package->hasViews('microweber-module-tawkto');

        $package->hasRoute('admin');
    }


    public function register(): void
    {
        parent::register();

        $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');

        Livewire::component('microweber-module-tawkto::admin-tawkto', AdminTawktoComponent::class);

       // Livewire::component('microweber-module-tawkto::settings', TawktoSettingsComponent::class);
        //ModuleAdmin::registerSettings('tawkto', 'microweber-module-tawkto::settings');

    }
}
