<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porfolios = Portfolio::all();

        return view('components.admin.portfolio.index', compact('porfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('url_image')) {
            $file = $request->file('url_image');
            $name = $file->getClientOriginalName();
            $file->move('assets/img/portfolio', $name);

            $request->url_image = $name;
        }

        Portfolio::create([
           "title" => $request->title,
           "subtitle" => $request->subtitle,
           "description" => $request->description,
           "url_image" => $request->url_image
        ]);

        $request->session()->flash('alert-success', 'Portfolio created correctly');
        return redirect()->route('portfolio-index')->with('success','Portfolio created correctly');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('components.admin.portfolio.edit', compact('portfolio'));
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
            $port = Portfolio::findOrFail($id);

            $port->title = $request->title;
            $port->subtitle = $request->subtitle;
            $port->description = $request->description;

            if ($request->file('url_image')) {
                File::delete( public_path().'\assets\img\portfolio\\'.$port->url_image);

                $file = $request->file('url_image');
                $name = $file->getClientOriginalName();
                $file->move('assets/img/portfolio', $name);

                $port->url_image = $name;
            }

            $port->save();

            $request->session()->flash('alert-success', 'Portfolio updated correctly');
            return redirect()->route('portfolio-index')->with('success','Portfolio updated correctly');
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
            $port = Portfolio::findOrFail($id);
            File::delete( public_path().'\assets\img\portfolio\\'.$port->url_image);

            $port->delete();

            $request->session()->flash('alert-success', 'Portfolio deleted correctly');
            return redirect()->route('portfolio-index')->with('success','Portfolio deleted correctly');
        }catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }


    }
}
