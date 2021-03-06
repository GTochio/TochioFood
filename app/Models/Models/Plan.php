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
 
 public function profiles()
 {
     return $this->belongsToMany(Profile::class);
 }

    public function search($filter = null)
    {
        $results = $this
                   ->where('name', 'LIKE', "%{$filter}%")
                   ->orwhere('description', 'LIKE', "%{$filter}%")
                   ->paginate(15);

        return $results;

                   
    }
    public function profilesAvailable($filter = null)
    {
        $profiles = Profile::whereNotIn('profiles.id',function($query){
            $query->select('plan_profile.profile_id');
            $query->from('plan_profile');
            $query->whereRaw("plan_profile.plan_id={$this->id}");
        })
        ->where(function($queryfilter) use ($filter){
            if($filter)
                $queryfilter->where('profiles.name', 'LIKE', "%($filter)%");
            
        })
        ->paginate();

        return $profiles;
    }
    
}
