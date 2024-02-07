<?php

namespace MicroweberPackages\Modules\Tawkto\Providers;

use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use MicroweberPackages\Module\Facades\ModuleAdmin;
use MicroweberPackages\Modules\Calendly\Http\Livewire\TawktoSettingsComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class TawktoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('microweber-module-tawkto');
        $package->hasViews('microweber-module-tawkto');
    }


    public function register(): void
    {
        parent::register();

        Livewire::component('microweber-module-tawkto::settings', TawktoSettingsComponent::class);
        ModuleAdmin::registerSettings('tawkto', 'microweber-module-tawkto::settings');

    }
}
