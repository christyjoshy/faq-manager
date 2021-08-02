<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::latest()->get();

        if ($request->expectsJson()) {
            $response = [
                'success' => true,
                'data' => $categories,
                'message' => "Data successfuly fetched",
            ];

            return response()->json($response, 200);
        } else {
            return view('faq-manager::index', compact('categories'));
        }
    }
}
