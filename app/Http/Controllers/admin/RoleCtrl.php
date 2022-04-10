<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleCtrl extends Controller
{
    //
    public function showAllRoles(){
        return view('pages.admin.roles-list');
    }

    public function showNewRole(){
        return view('pages.admin.new-role');
    }

    public function showEditRole(){
        return view('pages.admin.edit-role');
    }
}
