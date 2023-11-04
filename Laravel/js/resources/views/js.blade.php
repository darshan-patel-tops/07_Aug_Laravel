<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<div class="mt-5 float-end mb-5">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#employeemodal" data-bs-whatever="@getbootstrap">Add Employee</button>
</div>
<table class="table table-success table-striped mt-5 mb-5">
    <thead class="mt-5 mb-5">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Salary</th>
        <th scope="col">City</th>
        <th scope="col">Age</th>
        <th scope="col">Profile</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="mt-5" id="all-employee">
      {{-- <tr class="mt-5">
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
      </tr> --}}

    </tbody>
  </table>





<div class="modal fade" id="employeemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="EmployeeForm" method="POST" onsubmit="event.preventDefault(); AddEmployee();" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Age:</label>
            <input type="text" class="form-control" id="age" name="age">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">City:</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Salary:</label>
            <input type="text" class="form-control" id="salary" name="salary">
          </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Employee</button>
        </div>
    </form>
    </div>
  </div>
</div>


<script>

    function AllEmployee()
    {
        // console.log('all employee');
        fetch("http://localhost:8000/api/all-employee").then((res)=>res.json()).then(response=>
        {
            console.log(response);
            var allemployee = "";
            response.forEach(data =>
            {
                allemployee +=
                `
                        <tr class="mt-5">
                        <th scope="row">${data.id}</th>
                        <td>${data.name}</td>
                        <td>${data.salary}</td>
                        <td>${data.city}</td>
                        <td>${data.age}</td>
                        <td>${data.profile}</td>
                        <td>${data.profile}</td>

                        </tr>
                `
                    });
            document.getElementById('all-employee').innerHTML = allemployee;
        })
    }
    function AddEmployee()
    {
        console.log("add employee");

        // var name = document.getElementById('name').value;
        // var city = document.getElementById('city').value;
        // var salary = document.getElementById('salary').value;
        // var age = document.getElementById('age').value;
        // console.log(name);
        // console.log(city);
        // console.log(salary);
        // console.log(age);
        var result = {};
        $.each($('#EmployeeForm').serializeArray(), function() {
        result[this.name] = this.value;
    });

        console.log(result);


    fetch("http://localhost:8000/api/add-employee", {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    mode: "cors", // no-cors, *cors, same-origin
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(result), // body data type must match "Content-Type" header
  }).then((res)=>res.json()).then((response)=>{
        console.log(response);
        // document.getElementById('employeemodal').modal('hide');
        $('#employeemodal').modal('hide')
        $('#employeemodal form :input'). val("");
        AllEmployee()
    })

    }


    AllEmployee()

</script>
