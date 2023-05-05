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

<div class="container">
    <div class="row">
        <div class="col-12 text-center">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nazwa przedmiotu</th>
                    <th scope="col">Ilość</th>
                    <th scope="col">Wartość</th>
                    <th scope="col">Operacje</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nazwa</td>
                    <td>Ilość</td>
                    <td>Wartość</td>
                    <td>
                        <a href='edit.php' class='me-2'>
                            <button class='btn btn-success'>Edytuj</button>
                        </a>
                        <a href='delete.php'>
                            <button class='btn btn-danger'>Usuń</button>
                        </a>
                    </td>
                </tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

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