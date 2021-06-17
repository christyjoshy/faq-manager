<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Routing\Controller;

class CategoryManagementController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('faq-manager::category.index', compact('categories'));
    }

    public function store()
    {
        // TODO store new category
    }
}
