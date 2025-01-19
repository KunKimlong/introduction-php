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
    <form action="" method="POST" enctype="multipart/form-data" class="col-4 bg-light p-3 mx-auto">
        <label for="photo">Choose Photo</label>
        <img src="Image/images.png" alt="" width="100%">
        <input type="file" name="image" class="form-control my-2" id="photo">
    </form>
</body>
<script>
    $(document).ready(function(){
        $('img').click(function(){
            $('#photo').click();
            // alert(123)
        })
        $('#photo').change(function(){
            var formData = new FormData();
            var photo = $('#photo')[0].files[0];
            // console.log(formData,photo);
            formData.append('image',photo);
            console.log(formData);
            
            $.ajax({
                url:"move_upload.php",
                method:'POST',
                contentType:false,
                processData:false,
                cache:false,
                data:formData,
                success:function(response){
                    $('img').attr('src',response)
                }
            })
        })
    })
</script>
</html>