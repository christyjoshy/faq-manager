<?php

namespace Christyjoshy\FaqManager\Http\Livewire;

use Christyjoshy\FaqManager\Models\Category;
use Christyjoshy\FaqManager\Models\FaqEntry;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Faq extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $question,$categoryId,$answer,$faqId;

    public function create(){
        $this->question = '';
        $this->answer = '';
        $this->categoryId = '';
        $this->faqId = 0;
    }
    public function store(){
        $this->validate([
            'question' => 'required',
            'answer' => 'required',
            'categoryId' => 'required',
        ]);
        FaqEntry::updateOrCreate(['id' => $this->faqId],[
            'question' => $this->question,
            'answer' => $this->answer,
            'category_id' => $this->categoryId,

        ]);
        session()->flash('message','Query successfully added');
        $this->emit('faqSaved');
        $this->question = '';
        $this->answer = '';
        $this->categoryId = '';
        $this->faqId = 0;

    }
    public function edit($id){
        $faq = FaqEntry::find($id);
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->categoryId = $faq->category_id;
        $this->faqId = $faq->id;
    }
    public function dehydrate() {
        $this->emit('initializeCkEditor');
   }
   public function destroy($id){
        FaqEntry::find($id)->delete();
        session()->flash('message','Query Successfuly Deleted');
   }
    public function render()
    {
        $queries = FaqEntry::latest()->paginate(5);
        $categories = Category::all();
        return view('faq-manager::livewire.Faq.faq',compact('queries','categories'))->layout('faq-manager::layouts.livewire.app')->slot('table');
    }
}
?>
