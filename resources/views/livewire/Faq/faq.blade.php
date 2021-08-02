<div class="row">
    <div class="col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <div id="response-message" class="d-none"></div>
        <div class="mb-4 d-flex justify-content-end">
            <button class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#faq" wire:click="create">Add New Question</button>
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
                    <a class="btn btn-outline btn-warning" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#faq" wire:click="edit({{ $query->id }})" rel="nofollow">Edit</a>
                        @csrf
                        @method('DELETE')
                    <a class="btn btn-outline btn-danger" wire:click="destroy({{ $query->id }})">Delete</a>
                </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="5">No data found</td>
                </tr>
            @endforelse
            </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $queries->links() }}</div>


    </div>
    @include('faq-manager::livewire.faq.popup')
</div>

@section('script')
    <script type="text/javascript" src="{{ asset('vendor/faq-manager/js/faq.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('faqSaved', () => {
                $('#faq').modal('hide');
            });

        });
    </script>
     <script>
        // document.addEventListener('livewire:load', function () {
        //     Livewire.on('initializeCkEditor', function () {
        //         const editor = CKEDITOR.replace('answer');
        //         editor.on('change', function (event) {
        //             // console.log(event.editor.getData())
        //             @this.set('answer', event.editor.getData());
        //         })
                // if(CKEDITOR)
                // {
                //     CKEDITOR.replace( 'answer' );
                //     CKEDITOR.editorConfig = function( config )
                //     {
                //     config.language = 'en';
                //     enterMode : CKEDITOR.ENTER_BR;
                //     };
                // }
        //     });
        // });
    </script>

@endsection
