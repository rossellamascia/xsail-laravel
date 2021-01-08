<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnnouncementRequest;

class BackendPartnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements = Announcement::all();
        return view('partners.index', compact('announcements'));
    }
    
    public function create()
    {
        return view('partners.create');
    }
    public function store(AnnouncementRequest $request)
    {
        $user = Auth::user();
        $announcement = $user->announcements()->create([
            'title'=>$request->title,
            'long_description'=>$request->long_description,
            'short_description'=>$request->short_description,
            'price' =>$request->price
        ]);
        $category = Category::find($request->input('category'));
        $announcement->category()->associate($category);
        $announcement->save();
        return redirect()->back()->with('message','Hai creato un nuovo annuncio');
    }
    public function edit(Announcement $announcement){
    
        return view('partners.edit', compact('announcement'));
    }
    public function update(Announcement $announcement, Request $request){
        $user = Auth::user();
        $announcement = $user->announcements()->update([
            'title'=>$request->title,
            'long_description'=>$request->long_description,
            'short_description'=>$request->short_description,
            'price'=>$request->price
        ]);
        $category = Category::find($request->input('category'));
        $announcement->category()->sync($category);
        return redirect()->back()->with('message','post modificato');
    }
}
