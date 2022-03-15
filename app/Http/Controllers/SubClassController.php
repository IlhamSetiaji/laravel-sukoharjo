<?php

namespace App\Http\Controllers;

use App\Models\SubClass;
use Illuminate\Http\Request;

class SubClassController extends Controller
{
    public function index($masterClassID)
    {
        $subClasses = SubClass::where('master_class_id',$masterClassID)->get();
        return view('sub_classes',compact('subClasses','masterClassID'));
    }

    public function create($masterClassID)
    {
        return view('tambah_sub_class', compact('masterClassID'));
    }

    public function store($masterClassID)
    {
        SubClass::create([
            'master_class_id' => $masterClassID,
            'name' => request()->name,
            'description' => request()->description,
            'status' => request()->status,
        ]);
        
        return redirect($masterClassID.'/sub-class');
    }
}
