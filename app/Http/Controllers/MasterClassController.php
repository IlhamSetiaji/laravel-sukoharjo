<?php

namespace App\Http\Controllers;

use App\Models\MasterClass;
use Illuminate\Http\Request;

class MasterClassController extends Controller
{
    public function index()
    {
        $masterClasses = MasterClass::all();
        return view('master_classes', compact('masterClasses'));
    }

    public function create()
    {
        return view('tambah_master_class');
    }

    public function store()
    {
        MasterClass::create([
            'name' => request()->name,
            'description' => request()->description,
            'status' => request()->status,
        ]);

        return redirect('/master-class');
    }
}
