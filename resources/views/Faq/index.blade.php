@extends('faq-manager::layouts.backend')

@section('content')
<div class="col-md-12">
    <div class="box-header rounded bg-light text-dark p-4 p-md-5 mb-4 mt-4 d-flex justify-content-center">
        <h2>List of all Frequently Asked Questions</h2>
    </div>
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
                @foreach($queries as $query)
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td width="50%">{{ $query->question }}</td>
                    <td>{{ $query->category->name }}</td>
                    <td>{{ $query->updated_at }}</td>
                    <td width = "20%">
                        <a class="btn btn-outline btn-warning" href="{{ route('faq.edit',$query->id) }}" rel="nofollow">Edit</a>
                        <a class="btn btn-outline btn-danger" href="" rel="nofollow">Delete</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            
        </div>
    </div>
</div>
@endsection