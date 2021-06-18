<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\Category;
use Christyjoshy\FaqManager\Models\FaqEntry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqManagementController extends Controller
{
    public function index()
    {
        $queries = FaqEntry::all();

        return view('faq-manager::faq.index', compact('queries'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('faq-manager::faq.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $faq = $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'category_id' => 'required'
        ]);
        FaqEntry::create($faq);

        return redirect()->route('faq.index')
                         ->with('success', 'FAQ added successfully');
    }
    public function edit(FaqEntry $faq)
    {
        $categories = Category::all();
        return view('faq-manager::faq.edit', compact('faq','categories'));
    }

    public function update(Request $request, FaqEntry $faq)
    {
        $faqData = $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'category_id' => 'required'
        ]);
        $faq->update($faqData);

        return redirect()->route('faq.index')
                         ->with('success', 'FAQ updated successfully');
    }
}
