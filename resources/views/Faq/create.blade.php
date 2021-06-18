@extends('faq-manager::layouts.backend')

@section('content')
    <div class="col-md-12">
        <div class="box-header rounded bg-light text-dark p-4 p-md-5 mb-4 mt-4 d-flex justify-content-center">
            <h2>Add new FAQ</h2>
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
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-2">
                    <div class="form-group">
                        <strong>Question :</strong>
                        <input type="text" name="question" id="name" placeholder="Name" class="form-control" value="{{ old('question') }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-2">
                    <div class="form-group">
                        <strong>Answer :</strong>
                        <textarea type="text" name="answer" id="name" placeholder="Answer" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-2">
                    <div class="form-group">
                        <strong>Category :</strong>
                        <select class="form-control" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option @if(old('category_id') == $category->id ) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 cl-md-12 p-2">
                    <button type="submit" class="btn btn-outline btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'answer' );
</script>
@endsection