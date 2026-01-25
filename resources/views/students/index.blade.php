<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="p-3 bg-dark text-light text-center">
        <h4>Laravel with AJAX</h4>
    </header>
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Student List</h3>
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add more</button>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="data-table">
                <tr>
                    <td>001</td>
                    <td>Linit</td>
                    <td>Male</td>
                    <td>PHP</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @include("students.modals.create")
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const saveStudent = () => {
        let data = new FormData($("#formCreate")[0]);
        // let students = {
        //     name : data.get('name'),
        //     gender : data.get('gender'),
        //     course : data.get('course'),
        //     image : data.get('profile')
        // }
        // console.log(students);
        
        $.ajax({
            type: "POST",
            url: "{{ route('student.store') }}",
            data: data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.status == true){

                }else{
                    $('input').removeClass('is-invalid');
                    $('p').removeClass('text-danger').text('');
                    let errors = response.errors;
                    $.each(errors, function (key, value) { 
                         $(`#${key}`).addClass('is-invalid').siblings('p').addClass('text-danger').text(value);
                    });
                }
            }
        });
    }
</script>
</body>
</html>