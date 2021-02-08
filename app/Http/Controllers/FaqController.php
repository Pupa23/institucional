<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('components.admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Faq::create($request->all());

        $request->session()->flash('alert-success', 'Faq created correctly');
        return redirect()->route('faq-index')->with('success','Faq created correctly');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('components.admin.faq.edit', compact('faq'));
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
            $faq = Faq::findOrFail($id);

            $faq->question = $request->question;
            $faq->response = $request->response;

            $faq->save();

            $request->session()->flash('alert-success', 'Faq updated correctly');
            return redirect()->route('faq-index')->with('success','Faq updated correctly');
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
            $faq = Faq::findOrFail($id);
            $faq->delete();

            $request->session()->flash('alert-success', 'Faq deleted correctly');
            return redirect()->route('faq-index')->with('success', 'Faq delete correctly');

        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
