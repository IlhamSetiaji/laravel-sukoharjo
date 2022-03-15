<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubClass extends Model
{
    use HasFactory;

    protected $table = 'sub_classes';
    protected $guarded = ['id'];

    public function master_classes()
    {
        return $this->belongsTo(MasterClass::class,'master_class_id');
    }
}
