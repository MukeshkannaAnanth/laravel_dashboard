<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Crud</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Students <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#StudentModal">Add New Students</a>
                            <a href="#">{{Session::get('mail')}}</a>
                            <button id="logout" style="float:right;"><a href="#" >Logout</a></button>
                        </div>
                        
                        <div class="card-body">
                            <table id="studentTable" class="table">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($det as $student)
                                        <tr id="{{$student->id}}">
                                            <td>{{$student->firstname}}</td>
                                            <td>{{$student->lastname}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td><button class="btn btn-primary editdata" data-bs-toggle="modal" data-bs-target="#StudentModaledit" id="edit_data" value="{{$student->id}}">edit</button><button id="delete">Delete</button></td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- modal start -->
 
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade studentmodel" id="StudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" id="studentForm" >
                @csrf
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" class="form-control" id="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <button type="submit"  class="btn btn-primary">Submit</button>
            </form>
            </div>
             
        </div>
        </div>
    </div>



{{-- //model two --}}
<div class="modal fade" id="StudentModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="" id="studentForm">
            @csrf
            <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" class="form-control" id="edfirstname">
                <input type="text" class="form-control" id="editdata_id">
            </div>
            <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" id="edlastname">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="edemail">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="edphone">
            </div>
            <button type="button" id="update_data"  class="btn btn-primary">Update</button>
        </form>
        </div>
         
    </div>
    </div>
</div>

    <script>
        $("#studentForm").submit(function(e){
            e.preventDefault();
            let firstname = $("#firstname").val();
            let lastname = $("#lastname").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let _token = $("input[name=_token]").val();
 
            $.ajax({
                url: "{{route('student.add')}}",
                type:"POST" ,
                data: {
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    phone:phone,
                    _token:_token
                },
                success:function(response)
                {
                    console.log(response);
                    if(response){
                        selectdata();
                         $("#studentForm")[0].reset();
                        $(".studentmodel").modal('hide');
                    }
                }
            });
 
        });
    </script>

<script>
   $(document).on('click','.editdata', function(e){
        e.preventDefault();
        let id = $(this).val();
        console.log(id);
        let _token = $("input[name=_token]").val();
     
        $.ajax({
            url: "{{route('student.edit')}}",
            type:"POST" ,
            data: {
                id:id,
                _token:_token
            },
            success:function(response) 
            {
               console.log(response);
               $('#edfirstname').val(response.firstname);
               $('#edlastname').val(response.lastname);
               $('#edemail').val(response.email);
               $('#edphone').val(response.phone);
               $('#editdata_id').val(response.id);
              
            }
        });

    });
</script>


<script>
    $(document).on('click','.deletedata', function(e){
         e.preventDefault();
         let id = $(this).val();
       
         let _token = $("input[name=_token]").val();
      
         $.ajax({
             url: "{{route('student.delete')}}",
             type:"POST" ,
             data: {
                 id:id,
                 _token:_token
             },
             success:function(response) 
             {
                console.log(response); 
                selectdata();
             }
         });
 
     });
 </script>

<script>
    $(document).on('click','#logout', function(e){
         e.preventDefault();  
         let id = 1;
         let _token = $("input[name=_token]").val();

         $.ajax({
             url: "{{route('student.logout')}}",
             type:"POST" ,
             data: {
            id:id,
            _token:_token
             },
             success:function(response) 
             {
                console.log(response); 
                if(response=='logout'){
                    window.location.href = "{{route('student.Login')}}";
                }
             }
         });
 
     });
 </script>

<script>
    selectdata();
    function selectdata(){
        let _token = $("input[name=_token]").val();
       $.ajax({
        url: "{{route('student.fetch')}}",
            type:"POST" ,
            data: {
                _token:_token
            },
            success:function(response) 
            {
               console.log(response);
               $("#studentTable tbody").html(response);
 
            }
       })
    }
</script>

<script>
    $('#update_data').on('click',function(e){
    
          e.preventDefault();
          let id = $('#editdata_id').val();
          let _token = $("input[name=_token]").val();
          let firstname = $("#edfirstname").val();
            let lastname = $("#edlastname").val();
            let email = $("#edemail").val();
            let phone = $("#edphone").val();
          $.ajax({
              url: "{{route('student.update')}}",
              type:"POST" ,
              data: {
                  id:id,
                  _token:_token,
                  firstname:firstname,
                  lastname:lastname,
                  email:email,
                  phone:phone
              },
              success:function(response)
              {
                 console.log(response);
                 selectdata();
               $("#StudentModaledit").modal('hide');
              }
          });
  
      });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>
