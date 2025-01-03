<?php 
    // isset(); use for check is variable set or not
    // unset(); use for unset variable;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="col-4 mx-auto border border-2 p-4">
        <form action="" method="POST">
            <label for="">Number a</label>
            <input type="text" placeholder="Value A" name="txt-a" class="form-control my-2" id="">
            <label for="">Number b</label>
            <input type="text" placeholder="Value B" name="txt-b" class="form-control my-2" id="">
            <button name="btn-submit" class="btn btn-primary">Submit</button>
            <button name="btn-test" class = "btn btn-danger">Test</button>
        </form>
    </div>
    <div class="col-4 mx-auto">
        <table class="table table-hover table-dark text-center">
            <tr>
                <th>Number A</th>
                <th>Number B</th>
                <th>Maximum Number</th>
            </tr>
            <?php 
                if(isset($_POST['btn-submit'])){
                    $a = $_POST['txt-a'];
                    $b = $_POST['txt-b'];
                    $max_txt = '';

                    if($a>$b){
                        $max_txt = "A is Greater than B";
                    }
                    elseif($a == $b){
                        $max_txt = "A and B are Equal";
                    }
                    else{
                        $max_txt = "B is Greater than A";
                    }


                    

                    

                    echo '
                        <tr>
                            <td>'.$a.'</td>
                            <td>'.$b.'</td>
                            <td>'.$max_txt.'</td>
                        </tr>
                    ';
                }
                
            ?>
        </table>
    </div>
</body>
</html>