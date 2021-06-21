<?php
namespace Christyjoshy\FaqManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Christyjoshy\FaqManager\Models\Category;
use Christyjoshy\FaqManager\Models\FaqEntry;


class FrontendController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('faq-manager::index',compact('categories'));
    }
}
?>