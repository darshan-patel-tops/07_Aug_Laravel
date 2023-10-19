<div wire:ignore.self class="modal fade" id="addbrandmodal" tabindex="-1" aria-labelledby="addbrandmodallable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addbrandmodallable">Add Brand</h1>
          <button type="button" wire:click="closemodal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="addbrand">

            <div class="modal-body">
              <div class="mb-3">
                <label for="category_id">Select Category</label>
                <select name="category_id" wire:model.defer="category_id" required class="form-control">
                  <option value="">--Select Category--</option>
                  
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach

                </select>
                @error('category')<small class="text-danger">{{$message}}</small>@enderror

              </div>
              <div class="mb-3">
                <label for="name">Brand Name</label>
                <input type="text" wire:model.defer="name" class="form-control" name="name">
                @error('name')<small class="text-danger">{{$message}}</small>@enderror
              </div>
              <div class="mb-3">
                <label for="slug">Brand Slug</label>
                <input type="text" wire:model.defer="slug" class="form-control" name="slug">
                @error('slug')<small class="text-danger">{{$message}}</small>@enderror

              </div>
              <div class="mb-3">
                <label for="status">Stauts</label><br/>
                <input type="checkbox" wire:model.defer="status" name="status" />
                @error('status')<small class="text-danger">{{$message}}</small>@enderror

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" wire:click="closemodal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  {{-- Edit Brand modal --}}

  <div wire:ignore.self class="modal fade" id="editbrand" tabindex="-1" aria-labelledby="editbrandlable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editbrandlable">Update Brand</h1>
          <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div wire:loading class="p-2">
          <div class="spinner-border text-dark" role="status">
            <span class="visually-hidden"></span>
          </div>Loading...
        </div>

        <div wire:loading.remove>

        <form wire:submit.prevent="updatebrand">

            <div class="modal-body">
              <div class="mb-3">
                <label for="category_id">Select Category</label>
                <select name="category_id" wire:model.defer="category_id" required class="form-control">
                  <option value="">--Select Category--</option>
                  
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach

                </select>
                @error('category')<small class="text-danger">{{$message}}</small>@enderror

              </div>
              <div class="mb-3">
                <label for="name">Brand Name</label>
                <input type="text" wire:model.defer="name" class="form-control" name="name">
                @error('name')<small class="text-danger">{{$message}}</small>@enderror
              </div>
              <div class="mb-3">
                <label for="slug">Brand Slug</label>
                <input type="text" wire:model.defer="slug" class="form-control" name="slug">
                @error('slug')<small class="text-danger">{{$message}}</small>@enderror

              </div>
              <div class="mb-3">
                <label for="status">Stauts</label><br/>
                <input type="checkbox" wire:model.defer="status" name="status" />
                @error('status')<small class="text-danger">{{$message}}</small>@enderror

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" wire:click="closemodal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
      </div>

      </div>
    </div>
  </div>




     
<div wire:ignore.self class="modal fade" id="deletebrand" tabindex="-1" aria-labelledby="deletemodallable" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deletemodallable">Brand Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div wire:loading class="p-2">
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden"></span>
        </div>Loading...
      </div>
      <form wire:submit.prevent="destroybrand">

          <div class="modal-body">
              <h4>Are You Sure????</h4>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger">YES DELETE</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>