  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="faq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FAQ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-2">
                <div class="form-group">
                    <strong>Question :</strong>
                    <input type="text" name="question" id="name" placeholder="Name" class="form-control" value="{{ old('question') }}" wire:model="question">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-2">
                <div class="form-group">
                    <strong>Answer :</strong>
                    <textarea type="text" name="answer" placeholder="Answer" class="form-control" wire:model="answer"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-2">
                <div class="form-group">
                    <strong>Category :</strong>
                    <select class="form-select form-control" name="categoryId" wire:model="categoryId">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option @if(old('category_id') == $category->id ) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="store">Save changes</button>
        </div>
      </div>
    </div>
  </div>
