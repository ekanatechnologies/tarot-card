<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DevController extends Controller
{
    function roles()
    {
        return Role::all();
    }

    function rolesCreate()
    {
        Role::create(['name' => 'user']);
    }
}
