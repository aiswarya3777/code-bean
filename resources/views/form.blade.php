<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .error{
            color: red;
            padding-top:15px;
            
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    
    <div class="container">
    <h1>Form</h1>
        <form method="post" id="form_validation">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Age</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="age">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>

                <select name="gender" id="" class="form-control">
                    <option value="">Select</option>
                    <option value="male" class="form-control">Male</option>
                    <option value="female" class="form-control">Female</option>
                </select>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tos" value="1">
                <label class="form-check-label" for="exampleCheck1">TOS</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <script>
         $().ready(function () {
            $("#form_validation").validate({
                rules: {
                    name: {
                        required: true,
                        
                    },
                    age: {
                        required: true
                    },
                    gender: {
                        required: true,
                        
                    },
                    tos: {
                        required: true,
                        

                    }
                },
                messages: {
                    name: {
                        required: "Enter name"
                        
                    },
                    age: {
                        required: "Enter age"
                    },
                    gender: {
                        required: "Select Gender"
                    },
                    tos:{
                        required:"This is mandatory"
                    }
                    
                }
            });
        });
    </script>

</body>

</html>