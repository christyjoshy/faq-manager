<?php

namespace Christyjoshy\FaqManager\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('faq-manager::livewire.counter', ['counter' => $this->count])->layout('faq-manager::layouts.livewire.app')->slot('table');
    }
}
