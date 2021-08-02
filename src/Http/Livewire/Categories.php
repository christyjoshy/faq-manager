<?php

namespace Christyjoshy\FaqManager\Http\Livewire;

use Christyjoshy\FaqManager\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $categoryId;

    public function create()
    {
        $this->name = '';
        $this->categoryId = 0;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
        ]);
        Category::updateOrCreate(['id' => $this->categoryId], [
            'name' => $this->name,
        ]);
        session()->flash('message', 'Category successfully added');
        $this->emit('categorySaved');
        $this->name = '';
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $this->name = $category->name;
        $this->categoryId = $category->id;
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Category Successfuly Deleted');
    }

    public function render()
    {
        $categories = Category::latest()->paginate(5);

        return view('faq-manager::livewire.Category.categories', compact('categories'))->layout('faq-manager::layouts.livewire.app')->slot('table');
    }
}
