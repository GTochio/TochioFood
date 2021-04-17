<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'price', 'description'];

    public function details()
 {
     return $this->hasMany(DetailPlans::class);
 }
    

    public function search($filter = null)
    {
        $results = $this
                   ->where('name', 'LIKE', "%{$filter}%")
                   ->orwhere('description', 'LIKE', "%{$filter}%")
                   ->paginate(15);

        return $results;

                   
    }
}
