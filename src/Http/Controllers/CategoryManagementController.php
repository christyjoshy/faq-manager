<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class CategoryManagementController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('faq-manager::category.index', compact('categories'));
    }

    public function create()
    {
        //return "ok";
        return view('faq-manager::category.create');
    }

    public function store(Request $request)
    {
        $category = $this->validate($request, [
            'name' => 'required',
        ]);
        Category::create($category);

        return redirect()->route('category.index')
                         ->with('success', 'Category added successfully');
    }

    public function edit(Category $category)
    {
        return view('faq-manager::category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category = $this->validate($request, [
            'name' => 'required',
        ]);
        $category->update($category);

        return redirect()->route('category.index')
                         ->with('success', 'Category updated successfully');
    }
}
