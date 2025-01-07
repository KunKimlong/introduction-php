<?php 
    if(isset($_POST['btn-submit'])){
        $colors = $_POST['color'];
        // print_r($colors);// print array on browser
        foreach($colors as $color){
            echo $color." ";
        }
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    <div class="col-5 mx-auto bg-light p-4">
        <form action="" method="POST">
            <label for="">Choose Colors:</label> <br>
            <select name="color[]" id="" multiple class="js-example-placeholder-single js-states form-control my-2">
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Blue">Blue</option>
                <option value="Pink">Pink</option>
            </select>




            <!-- use with checkbox -->
            <!-- <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" name="color[]" value="Red" id="t-red">
                <label class="form-check-label" for="t-red">
                    Red
                </label>
            </div>
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" name="color[]" value="Green" id="t-green">
                <label class="form-check-label" for="t-green">
                    Green
                </label>
            </div>
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" name="color[]" value="Blue" id="t-blue">
                <label class="form-check-label" for="t-blue">
                    Blue
                </label>
            </div>
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" name="color[]" value="Pink" id="t-pink">
                <label class="form-check-label" for="t-pink">
                    Pink
                </label>
            </div> -->
            <button name="btn-submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
<script>
    jQuery(document).ready(function(){
        $(".js-example-placeholder-single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    })
</script>
</html>