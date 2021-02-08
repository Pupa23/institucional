<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('components.admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service::create($request->all());

        $request->session()->flash('alert-success', 'Service created correctly');
        return redirect()->route('service-index')->with('success','Service created correctly');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('components.admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $service = Service::findOrFail($id);

            $service->card_title = $request->card_title;
            $service->card_description = $request->card_description;

            $service->save();

            $request->session()->flash('alert-success', 'Service updated correctly');
            return redirect()->route('service-index')->with('success','Service updated correctly');
        }catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();

            $request->session()->flash('alert-success', 'Service deleted correctly');
            return redirect()->route('service-index')->with('success', 'Service delete correctly');
        }catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
