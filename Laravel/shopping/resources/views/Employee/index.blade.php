@extends('layouts.app2')


@section('content')

@if (session('message'))
<div class="alert alert-primary" role="alert">
    {{ session('message') }}
</div>
@endif

    <div class="card-body">
        <a href="/admin/add-employee" class="btn btn-primary mb-4">
                Add Employee
        </a>
        <div class="table-responsive">
            <table class="table mb-2">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="employee-data">


                    {{-- @forelse ($category as $item)
                    <tr class="table-primary">
                        <td>{{ $item->name }}</td>
                        <td>
                            <img src="/{{ $item->image }}" height="100px" width="100px" alt="No image found"></td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->visible === 0)
                                <h4>
                                    <span class="badge badge-danger ">Not Visible</span>
                                </h4>
                                @else
                                <h4>
                                    <span class="badge badge-success ">Visible</span>
                                </h4>
                                @endif
                            </td>

                            <td>
                                <a href="{{ url('/admin/update-category/'.$item->id) }}" class="btn btn-sm btn-primary">Update</a>
                                <form action="/admin/delete-category/{{$item->id  }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>

                        @empty
                        <tr>
                            <td colspan="5">No Category Available</td>
                        </tr>
                        @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>



    <script>
        function alldata()
        {
            console.log("Function called");
            document.getElementById('employee-data').innerHTML = `Data print from js`;
        }
        alldata();
        // window.addEventListener('close-modal',event=>
        // {
        //     $('#exampleModal').modal('hide');
        //     $('#editbrand').modal('hide');
        //     $('#deletebrand').modal('hide');
        // });
    </script>
@endsection
