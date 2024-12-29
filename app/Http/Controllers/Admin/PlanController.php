<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PlanController extends Controller
{
    public function index(){

        $plans = Plan::latest()->get();

        return view('admin.pages.plan.index', compact('plans'));
    }


    public function create(){

    }

    public function store(PlanRequest $request){

        try {

            $validatedData = $request->validated();

            Plan::create([
                'title' => $validatedData['title'],
                'start_date' => $validatedData['start_date'],
                'end_date' => $validatedData['end_date'],
                'description' => $validatedData['description'],
                'status' => $validatedData['status'] ?? 0,
            ]);

            return redirect()->route('plan.index')->with('success', 'Plan created successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An unexpected error occurred: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id){
        try {
           $plan= Plan::findOrFail($id);


          return json();

        } catch (\Exception $e) {

        }
    }




}
