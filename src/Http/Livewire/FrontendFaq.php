<?php

namespace Christyjoshy\FaqManager\Http\Livewire;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendFaq extends Component
{
    // use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    // public $name,$categoryId;

    public function render()
    {
        $categories = Category::latest()->with('faq')->get();
        return view('faq-manager::livewire.frontendfaq',compact('categories'))->layout('faq-manager::layouts.livewire.app')->slot('table');
    }
}
?>
