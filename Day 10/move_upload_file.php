<?php 
    if(isset($_POST['btn-submit'])){
        $image = $_FILES['image'];
        $from = $image['tmp_name'];
        $to = "Image/".$image["name"];
        move_uploaded_file($from,$to);
        print_r($image);
    }
?>
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
        <img src="
            <?php 
                if(isset($_POST['btn-submit']))
                {
                    echo $to;
                }
                else{
                    echo "Image/images.png";
                }
            ?>
        " alt="" width="100%">
        <input type="file" name="image" class="form-control my-2" id="photo">
        <button name="btn-submit" class="btn btn-outline-success">Submit</button>
    </form>
</body>
</html>