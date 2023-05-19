<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Datacollecting extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->hasOne(Categories::class,'id','category_id');

    }

    protected $table = 'datacollectings';
    protected $guarded = false;
}
