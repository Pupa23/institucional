<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{

    public function __constructor()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mains = Main::findOrFail(1);

        return view('components.admin.main.index', compact('mains'));
    }


    public function store(Request $request)
    {
        $main = $request->all();

        if ($file = $request->file('url_image')){
            $name = $file->getClientOriginalName();

            $file->move('assets/img/main', $name);

            $main['url_image'] = $name;
        }

        Main::create($main);

        $request->session()->flash('alert-success', 'Sections updated correctly');
        return redirect()->route('main-index')->with('success','Sections updated correctly');
    }

    public function update(Request $request)
    {
        try {
            $main = Main::findOrFail($request->id);
            $main->title = $request->title;
            $main->subtitle = $request->subtitle;
            $main->description_about = $request->description_about;
            $main->description_service = $request->description_service;
            $main->description_cta = $request->description_cta;

            if ($request->file('url_image')){
                File::delete( public_path().'\assets\img\main\\'.$main->url_image);

                $file = $request->file('url_image');
                $name = $file->getClientOriginalName();
                $file->move('assets/img/main', $name);

                $main->url_image = $name;
            }

            $main->save();

            $request->session()->flash('alert-success', 'Sections updated correctly');
            return redirect()->route('main-index')->with('success','Sections updated correctly');
        }catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

}
