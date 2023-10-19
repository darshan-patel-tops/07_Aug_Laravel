<div>

<div wire:ignore.self class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodallable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deletemodallable">Category Delete</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="destroycategory">

            <div class="modal-body">
                <h4>Are You Sure?</h4>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">YES DELETE</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@if(session('message'))
<h1 class="alert alert-success"> {{session('message')}}</h1>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    Category
                      <a href="{{url('/admin/category/create')}}" class="btn btn-primary float-end">Add Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)

                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status == '1' ? 'Hidden':'Visible'}}</td>
                            <td><img src="/uploads/category/{{$category->image}}" alt="Category Image" height="40px" width="40px"></td>
                            <td>
                            <a href="{{url('/admin/category/'.$category->id.'/edit')}}"  class="btn btn-success">Edit</a>
                            <a href="#" wire:click="deletecategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deletemodal" class="btn btn-danger">Delete</a>
                                {{-- {{$category->name}} --}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div>
                    {{$categories->links()}}
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@push('script')
    <script>
        window.addEventListener('close-modal',event=>
        {
            $('#deletemodal').modal('hide');
        });
    </script>
@endpush
