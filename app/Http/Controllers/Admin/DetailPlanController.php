<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\DetailPlans;
use App\Models\Models\Plan;
use Illuminate\Http\Request;

class DetailPlanController extends Controller
{
    protected $repository, $plan;

    public function __construct(DetailPlans $detailplan, Plan $plan)
    {
       $this->repository = $detailplan;
       $this->plan = $plan;
    }

    public function index($urlPlan)
    {
        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirect()->back();
        }

        //$details = $plan->details();
        $details = $plan->details()->paginate();
        return view('admin.pages.plans.details.index', [
            'plan' => $plan,
            'details' => $details
        ]);
    }

    public function create($urlPlan)
    {
        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirect()->back();
        }
        
        return view('admin.pages.plans.details.create', [
            'plan'=> $plan,
        ]);
    }

    public function store(Request $request, $urlPlan)
    {
        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirect()->back();
        }
        
        // $data = request()->all();
        // $data['plan_id'] = $plan->id;
        // $this->repository->create();

        $plan->details()->create($request->all());

        return redirect()->route('details.plan.index', $plan->url);

    }



}
