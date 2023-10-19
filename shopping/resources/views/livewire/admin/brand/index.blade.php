<div>

   @include('livewire.admin.brand.modal-form')

   @if(session('message'))
   <h1 class="alert alert-success"> {{session('message')}}</h1>
   @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Brand List
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addbrandmodal" class="btn btn-primary float-end">Add Brands</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                            <tr>
                                    
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td>
                                    @if($brand->category)
                                    {{$brand->category->name}}
                                    @else
                                    No Category 
                                    @endif
                                </td>

                                    <td>{{$brand->slug}}</td>
                                <td>{{$brand->status == '1' ? 'Hidden':'Visible'}}</td>
                                <td>
                                    <a href="#"  wire:click="editbrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#editbrand"  class="btn btn-success">Edit</a>
                                    <a href="#" wire:click="deletebrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#deletebrand" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                     
                <div>
                    {{$brands->links()}}
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
            $('#addbrandmodal').modal('hide');
            $('#editbrand').modal('hide');
            $('#deletebrand').modal('hide');
        });
    </script>
@endpush