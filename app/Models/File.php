<?php

namespace App\Models;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $primaryKey = 'file_id';

    protected $guarded = ['file_id'];


    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_file','file_id','package_id');
    }
}
