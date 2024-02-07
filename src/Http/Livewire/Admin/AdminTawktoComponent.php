<?php

namespace MicroweberPackages\Modules\Tawkto\Http\Livewire\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MicroweberPackages\Admin\Http\Livewire\AdminComponent;

class AdminTawktoComponent extends AdminComponent
{
    use AuthorizesRequests;

    public function render()
    {
        return view('microweber-module-tawkto::admin.livewire.index', [

        ]);
    }
}
