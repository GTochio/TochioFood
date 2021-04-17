<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPlans extends Model
{
   protected $table = 'details_plans';

   protected $fillable = ['name'];

   public function plan()
   {

    $this->belongsTo(Plan::class);
   }
}
