<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('faq-manager::index', compact('categories'));
    }
}
