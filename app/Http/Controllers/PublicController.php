<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->take(6)->get();
        return view('home', compact('announcements'));
    }

    public function show(Announcement $announcement)
    {
       
        return view('announcements.show', compact('announcement'));
    }
    public function search(Request $request)
    {
        
        $q = $request->input('q');
        $announcements = Announcement::search($q)->where('is_accepted', true)->get();
      
        return view('search_results', compact('q', 'announcements'));
    }

    public function indexByCategory($name, $category_id)
    {
        $category = Category::find($category_id);
        $announcements = $category->announcements()->paginate(6);

        return view('announcements.index', compact('category', 'announcements'));
    }
}
