<?php

namespace MicroweberPackages\Modules\Tawkto\Http\Controllers\Admin;

use MicroweberPackages\Admin\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AdminTawktoController extends AdminController
{
    public function index(Request $request)
    {
        return view('microweber-module-tawkto::admin.index');
    }
}
