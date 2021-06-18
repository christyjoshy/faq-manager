@extends('faq-manager::layouts.backend')

@section('content')
    <div class="col-md-12">
        <div class="box-header rounded bg-light text-dark p-4 p-md-5 mb-4 mt-4 d-flex justify-content-center">
            <h2>Add new FAQ Category</h2>
        </div>
        @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 cl-md-12">
                    <div class="form-group">
                        <strong>Category Name<span class="text-danger">*</span>:</strong>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 cl-md-12">
                    <button type="submit" class="btn btn-outline btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection