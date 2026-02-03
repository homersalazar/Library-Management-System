<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        $formattedData = [];

        foreach ($permissions as $item) {
            $formattedData[] = [
                'id' => $item->id,
                'parent' => $item->parent_id ?: '#',
                'text' => $item->name,
            ];
        }
        return view('permissions.index', compact('formattedData'));
    }
}
