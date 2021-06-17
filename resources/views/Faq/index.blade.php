@extends('layouts.backend')

@section('content')
<div class="col-md-12">
    <div class="box-header rounded bg-light text-dark p-4 p-md-5 mb-4 mt-4 d-flex justify-content-center">
        <h2>List of all Frequently Asked Questions</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right mb-4">
                        <button class="btn btn-sm btn-primary pull-right">Add New Question</button>
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
                        <a class="btn btn-outline btn-warning" href="" rel="nofollow">Edit</a>
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