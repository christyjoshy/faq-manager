<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Http\Request;

class CategoryManagementController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        if ($request->expectsJson()) {
            $response = [
                'success' => true,
                'data' => $categories,
                'message' => "Categories successfuly fetched",
            ];

            return response()->json($response, 200);
        } else {
            return view('faq-manager::category.index', compact('categories'));
        }
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
        if ($request->expectsJson()) {
            $response = [
                'success' => true,
                'data' => '',
                'message' => "Category successfuly Added",
            ];

            return response()->json($response, 200);
        } else {
            return redirect()->route('category.index')
                         ->with('success', 'Category added successfully');
        }
    }

    public function edit(Category $category, Request $request)
    {
        if ($request->expectsJson()) {
            $response = [
                'success' => true,
                'data' => $category,
                'message' => "Category details successfuly fetched",
            ];

            return response()->json($response, 200);
        } else {
            return view('faq-manager::category.edit', compact('category'));
        }
    }

    public function update(Request $request, Category $category)
    {
        $data = $this->validate($request, [
            'name' => 'required',
        ]);
        $category->update($data);
        if ($request->expectsJson()) {
            $response = [
                'success' => true,
                'data' => '',
                'message' => "Category successfuly updated",
            ];

            return response()->json($response, 200);
        } else {
            return redirect()->route('category.index')
                         ->with('success', 'Category updated successfully');
        }
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
