<?php $title = "Frequestly Asked Questions"; ?>
@extends('faq-manager::layouts.backend')
@section('style')
    <style type="text/css">
        #list{
            font-size: 20px;
        }
        li{
            list-style: none;
        }
    </style>
@endsection

@section('content')
    <div class="col-md-12">
        
        <div class="row">
            <div class="col-md-12">
               <div class="container bg-light">
                    <div class="p-4 m-4">
                        <ul id="list">
                        @foreach($categories as $faq)
                        @if($faq->faq->count() > 0)
                            @if(config('faq-manager.category_title_show') == 1)
                                <li class="category"><strong>{{ strToUpper($faq->name) }}</strong></li>
                            @endif
                        @foreach($faq->faq as $qn)
                                <div class="m-2 p-2"><strong>{{ config('faq-manager.question_prefix') }}</strong>.&nbsp;{{ $qn->question }}</div>
                                <div class="m-2 p-2"><strong>{{ config('faq-manager.answer_prefix') }}</strong>.&nbsp;{!! $qn->answer !!}</div>
                                @if(config('faq-manager.category_title_show') == 1)
                                    <hr>
                                @endif
                        @endforeach
                        @endif
                        @endforeach
                        </ul>
                    </div>
               </div>
            </div>
        </div>
    </div>
@endsection
