<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterClass extends Model
{
    use HasFactory;

    protected $table = 'master_classes';
    protected $guarded = ['id'];

    public function sub_classes()
    {
        return $this->hasMany(SubClass::class);
    }
}
