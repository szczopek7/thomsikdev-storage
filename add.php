<?php

//Dołącz plik system.php zawierający połączenia z bazą danych w zmiennej $connect;
require ('app/system.php');

?>


<!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="UTF-8">
        <title>Magazyn</title>
        <link rel="stylesheet" href="/gfx/css/bootstrap.min.css">
        <link rel="stylesheet" href="/gfx/css/magazyn.css">
    </head>

    <body class="d-flex flex-column min-vh-100">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>MAGAZYN</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light mb-2">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href='index.php'>Lista przedmiotów</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='add.php'>Dodaj przedmiot do magazynu</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>

    <?php

    //Verify that data has been entered
    if(isset($_POST['product_name']) && isset($_POST['product_amount']) && isset($_POST['product_value'])){

        //Check for empty fields; isset does not check this
        if(!empty($_POST['product_name']) || !empty($_POST['product_amount']) || !empty($_POST['product_value'])){

            //Filter the data
           $product_name = mysqli_real_escape_string($connect, $_POST['product_name']);
           $product_amount = mysqli_real_escape_string($connect, $_POST['product_amount']);
           $product_value = mysqli_real_escape_string($connect, $_POST['product_value']);

           /*
            *
            * Uses the decimal type in the database,
            * So if someone enters a value with , {comma}
            * , {comma} it converts it to . {dot}
            *
            */
           $product_value = str_replace(',','.',$product_value);


           //SQL Query adding product to the base
           $insertSQL = "INSERT INTO storage (product_name, product_amount, product_value) VALUES ('$product_name','$product_amount','$product_value')";

            // Execution of the SQL query
           if($connect->query($insertSQL)){
               //Move to index.php {List of products}
               header('Location: index.php');
           }

        }else{
            $msg = 'Nie dodano produktu do bazy danych';
        }

        $msg = 'Wypełnij wszystkie pola';

    }

    //Show error msg, if is needed.
    if(!empty($msg)){
        echo "<div class='alert alert-info mb-2' role='alert'>
           $msg
        </div>";

    }


    ?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 ">
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label for="product_name">Nazwa towaru</label>
                        <input class="form-control" type="text" name="product_name" id="product_name">
                    </div>
                    <div class="form-group">
                        <label for="product_amount">Ilość towaru</label>
                        <input class="form-control" type="text" name="product_amount" id="product_amount">
                    </div>
                    <div class="form-group">
                        <label for="product_value">Koszt towaru</label>
                        <input class="form-control" type="text" name="product_value" id="product_value">
                    </div>

                    <hr>
                    <button class="btn btn-success" type="submit">Dodaj produkt</button> &nbsp; <button class="btn btn-warning" type="reset"> Wypełnij jeszcze raz</button>
                </form>

            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    Stopka &copy; 2023 ThomsikDev
                </div>
            </div>
        </div>
    </div>

    </body>

    <script src="/gfx/js/bootstrap.bundle.js"></script>

    </html>