<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Christyjoshy\FaqManager\Models\FaqEntry;
use Illuminate\Http\Request;

class FaqManagementController extends Controller
{
    public function index(Request $request)
    {
        $queries = FaqEntry::all();
        if($request->expectsJson()){

            $response = [
                'success' => true,
                'data'    => $queries,
                'message' => "Data successfuly fetched",
            ];
            return response()->json($response, 200);
        }
        else{
            return view('faq-manager::faq.index', compact('queries'));
        }
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        if($request->expectsJson()){

            $response = [
                'success' => true,
                'data'    => $categories,
                'message' => "Data successfuly fetched",
            ];
            return response()->json($response, 200);
        }
        else{

            return view('faq-manager::faq.create', compact('categories'));
        }
    }

    public function store(Request $request)
    {
        $faq = $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'category_id' => 'required',
        ]);
        FaqEntry::create($faq);
        if($request->expectsJson()){

            $response = [
                'success' => true,
                'data'    => '',
                'message' => "Query successfuly Added",
            ];
            return response()->json($response, 200);
        }
        else{

        return redirect()->route('faq.index')
                         ->with('success', 'FAQ added successfully');
        }
    }

    public function edit(FaqEntry $faq, Request $request)
    {
        $categories = Category::all();
        if($request->expectsJson()){

            $response = [
                'success' => true,
                'data'    => $categories,
                'message' => "Data successfuly fetched",
            ];
            return response()->json($response, 200);
        }
        else{

        return view('faq-manager::faq.edit', compact('faq', 'categories'));
        }
    }

    public function update(Request $request, FaqEntry $faq)
    {
        $faqData = $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'category_id' => 'required',
        ]);
        $faq->update($faqData);
        if($request->expectsJson()){

            $response = [
                'success' => true,
                'data'    => '',
                'message' => "Data successfuly updated",
            ];
            return response()->json($response, 200);
        }
        else{

            return redirect()->route('faq.index')
                         ->with('success', 'FAQ updated successfully');
        }
    }

    public function destroy(Request $request, $id)
    {
        $faq = FaqEntry::find($id);
        if($request->expectsJson()){

            $response = [
                'success' => true,
                'message' => "Data successfuly deleted",
            ];
            return response()->json($response, 200);
        }
        else{
            if ($request->ajax()) {
                $faq->delete();
                $status = [
                        'status' => 'ok',
                        'message' => 'success',
                        'data' => "FAQ deleted successfully ",
                    ];

                return response()->json($status);
            }
        }
    }
}
