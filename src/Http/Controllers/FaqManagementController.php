<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use Christyjoshy\FaqManager\Models\FaqEntry;
use Illuminate\Routing\Controller;

class FaqManagementController extends Controller
{
    public function index()
    {
        $queries = FaqEntry::all();

        return view('faq-manager::faq.index', compact('queries'));
    }

    public function store()
    {
        // TODO store new faq
    }
}
