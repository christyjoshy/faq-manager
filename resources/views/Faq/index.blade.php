<?php $title = "List of all Frequently Asked Questions";?>
@extends('faq-manager::layouts.backend')

@section('content')
<div class="col-md-2">
  @include('faq-manager::layouts.partial.sidebar')
</div>
<div class="col-md-8">
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right mb-4">
                      <a href="{{ route('faq.create') }}" class="btn btn-sm btn-primary pull-right"> Add New FAQ</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Question</th>
                    <th scope="col">Category</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                @forelse($queries as $query)
                  <tr id="query_{{ $query->id }}">
                    <th scope="row">{{ $i++ }}</th>
                    <td width="50%">{{ $query->question }}</td>
                    <td>{{ $query->category->name }}</td>
                    <td>{{ $query->updated_at }}</td>
                    <td width = "20%">
                        <a class="btn btn-outline btn-warning" href="{{ route('faq.edit',$query->id) }}" rel="nofollow">Edit</a>
                          @csrf
                            @method('DELETE')
                        <a class="btn btn-outline btn-danger action-delete" data-id="{{ $query->id }}">Delete</a>
                    </td>
                  </tr>
                  @empty
                  <tr>
                      <td class="text-center" colspan="5">No data found</td>
                  </tr>
                @endforelse
                </tbody>
              </table>
            
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('vendor/faq-manager/js/faq.js') }}"></script>
@endsection