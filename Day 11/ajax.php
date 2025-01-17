<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="col-4 mx-auto bg-light p-3">
        <h1 class="text-center">Employee Information</h1>
        <form>
            <label for="txt-id">ID:</label>
            <input type="text" name="" id="txt-id" placeholder="ID" class="form-control my-2">
            <label for="txt-name">Name:</label>
            <input type="text" name="" id="txt-name" placeholder="Name" class="form-control my-2">
            <label for="txt-gender">Gender</label>
            <select name="" id="txt-gender" class="form-select my-2">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label for="txt-salary">Salary:</label>
            <input type="text" name="" id="txt-salary" placeholder="Salary" class="form-control my-2">
            <button type="button" id="btn-submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
    <div class="col-6 mx-auto text-center">
        <h1 id="show-info">No information</h1>
    </div>
</body>
<script>
    //Jquery
    // $(document).ready(function(){
    //     $.ajax({
    //         url:'backend.php', //path of backend language
    //         // type:'POST'
    //         method:'POST', // method form
    //         data:'',
    //         success: function(respone){
    //             console.log(respone);
                
    //         }

    //     });
    // });



    $(document).ready(function(){
        $('#btn-submit').click(function(){
            var id_txt = $('#txt-id').val();
            var name_txt = $('#txt-name').val();
            var gender_txt = $('#txt-gender').val();
            var salary_txt = $('#txt-salary').val();
            // alert(id+name+gender+salary)


            $.ajax({
                url:'backend.php',
                method:'POST',
                data:{
                    id: id_txt,
                    name: name_txt,
                    gender: gender_txt,
                    salary: salary_txt,
                },
                success: function(respone){
                    console.log(respone);   
                    $('#show-info').text(respone)
                }

            }); 
        })
    })
</script>
</html>