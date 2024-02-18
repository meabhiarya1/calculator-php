<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator in PHP</title>
  </head>
  <body>
    

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center rounded">
                <div class="col-6 m-5 shadow p-3 mb-5 bg-body-tertiary rounded ">
                <h3 class="text-center m-3" >Calculator<h3>
                <form method="POST">
                    <div class="mb-3">
                        <label for="firstNumber" class="form-label m-2">First Number</label>
                        <input name="firstNumber" type="number" class="form-control m-2" id="firstNumber">
                    </div>
                    <div class="mb-3">
                        <label for="secondNumber" class="form-label m-2">Second Number</label>
                        <input name="secondNumber" type="number" class="form-control m-2" id="secondNumber">
                    </div>
                    <select name="operation" class="form-select m-2" aria-label="Default select example">
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="multi">MULTI</option>
                    <option value="div">DIV</option>
                    </select>
                    <button name="submit" type="submit" class="btn btn-primary my-3 mx-2">Submit</button>
                </form>

                <p>
                    <?php
                        if(isset($_POST['submit'])){
                            $num1 = $_POST['firstNumber'];
                            $num2 = $_POST['secondNumber'];
                            $operation = $_POST['operation'];

                            switch ($operation){
                                case 'add': $add = $num1 + $num2;
                                    echo 'The result is '.$add;
                                break;

                                case 'sub': $sub = $num1 - $num2;
                                    echo 'The result is '.$sub;
                                break;

                                case 'multi': $multi = $num1 * $num2;
                                    echo 'The result is '.$multi;
                                break;

                                case 'div': $div = $num1 / $num2;
                                    echo 'The result is '.$div;
                                break;

                                default : echo 'Out of Calculation';
                            }

                        }
                    ?>
                </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>