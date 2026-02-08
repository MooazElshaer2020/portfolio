<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $websites = Project::where('category', 'website')
            ->orderBy('order')
            ->get();
        
        $systems = Project::where('category', 'system')
            ->orderBy('order')
            ->get();

        return view('portfolio.index', compact('websites', 'systems'));
    }

    public function projects()
    {
        $projects = Project::orderBy('order')->get();
        return view('portfolio.projects', compact('projects'));
    }

    public function contact()
    {
        return view('portfolio.contact');
    }
}