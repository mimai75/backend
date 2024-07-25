<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Number One</label>
                            <input type="number" class="form-control" placeholder="Number One" name="number_one">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Number Two</label>
                            <input type="number" class="form-control" placeholder="Number Two" name="number_two">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">ADD(+)</button>
                        <button type="submit" class="btn btn-danger" name="minus">MINUS(-) </button>
                        <button type="submit" class="btn btn-primary" name="multi">MULTI(*)</button>
                        <button type="submit" class="btn btn-danger" name="div">DIV(/)</button>
                    </form>
                </div>
                <?php if(isset($_POST['number_one']) && isset($_POST['number_two'])){ ?>
                <div class="alert alert-success mt-3">
                <?php
$number_one =$_POST['number_one'];
$number_two =$_POST['number_two'];


if($_POST['number_one']){
    if($_POST['number_two']){
    if(isset($_POST['add'])){
        print_r($_POST['number_one']+$_POST['number_two']);
    }
    if(isset($_POST['minus'])){
        print_r($_POST['number_one']-$_POST['number_two']);
    }
    
    if(isset($_POST['multi'])){
        print_r($_POST['number_one']*$_POST['number_two']);
    }
    
    if(isset($_POST['div'])){
        print_r($_POST['number_one']/$_POST['number_two']);
    }
    
}
else{
    echo "no 2 nai";
}    
    
}
else{
    echo "no 1 nai";
}




?>

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">

    </script>
</body>

</html>
