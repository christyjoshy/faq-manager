<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Http\Request;

class CategoryManagementController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('faq-manager::category.index', compact('categories'));
    }

    public function create()
    {
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
        $data = $this->validate($request, [
            'name' => 'required',
        ]);
        $category->update($data);

        return redirect()->route('category.index')
                         ->with('success', 'Category updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->ajax()) {
            if ($category->faq->count() > 0) {
                $status = [
                    'status' => 'notok',
                    'message' => 'error',
                    'data' => "<strong>Error!</strong>, Category is related to one or more FAQs",
                ];

                return response()->json($status);
            } else {
                $category->delete();
                $status = [
                    'status' => 'ok',
                    'message' => 'success',
                    'data' => "Category deleted successfully ",
                ];

                return response()->json($status);
            }
        }
    }
}
