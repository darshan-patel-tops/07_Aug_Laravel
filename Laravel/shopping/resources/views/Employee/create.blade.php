@extends('layouts.app2')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Inputs</h4>
            </div>
            <div class="card-body">
                <form  method="POST" id="employeeform"  onsubmit="event.preventDefault() addemployee() " enctype="multipart/form-data">
                    @csrf

                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" id="name" placeholder="Enter Name of Employee" required class="form-control">
                        </div>
                    </div>

                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">age</label>
                        <div class="col-md-10">
                            <input type="text" name="age" id="age" placeholder="Enter age of Employee" required class="form-control">
                        </div>
                    </div>

                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">salary</label>
                        <div class="col-md-10">
                            <input type="text" name="salary" id="salary" placeholder="Enter salary of Employee" required class="form-control">
                        </div>
                    </div>

                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">city</label>
                        <div class="col-md-10">
                            <input type="text" name="city" id="city" placeholder="Enter city of Employee" required class="form-control">
                        </div>
                    </div>



                    {{-- <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image" id="image" accept="image/*" placeholder="Enter Name of Category" required class="form-control">
                        </div>
                    </div> --}}

                    <button class="btn btn-success float-end" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>

    <script>

        function addemployee()
        {
                console.log('employee function');
        }



    </script>

@endsection
