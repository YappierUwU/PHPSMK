<?php

session_start();
require_once "../dbcontroller.php";
$db = new DB;

if (!isset($_SESSION['user'])) {
    header("location :login.php ");
}
if (isset($_GET['log'])) {
    session_destroy();
    header("location :index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Aplikasi Restoran SMK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-mb-3">
                <h2>Restoran</h2>
            </div>
            <div class="col-mb-9">
                <div class="float-end mt-4"><a href="?log=logout"> logout </a></div>
                <div class="float-end me-4 mt-4">user : <a href="?f=user&m=updateuser&id=<?php echo $_SESSION['iduser'] ?>"> <?php echo $_SESSION['user'] ?> </a> </div>
                <div class="float-right mt-4 mr-4">Level : <?php echo $_SESSION['level'] ?></div>

            </div>

        </div>
        <div class="row mt-5">

            <div class="col-mb-3">

                <ul class="nav flex-column">

                    <?php

                    $level = $_SESSION['level'];
                    switch ($level) {
                        case 'admin':
                            echo '
                    <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li>
                    ';
                            break;

                        case 'kasir':
                            echo '
                        <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                        <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                        
                        ';
                            break;

                        case 'koki':
                            echo '
                        <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                        ';
                            break;

                        default:
                            echo "Tidak ada menu";
                            break;
                    }

                    ?>

                </ul>

            </div>
            <div class="col-mb-9">
                <?php

                if (isset($_GET['f']) && isset($_GET['m'])) {
                    $f = $_GET['f'];
                    $m = $_GET['m'];

                    $file = '../' . $f . '/' . $m . '.php';

                    require_once $file;
                }


                ?>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col">
                <p class="text-center"> 2021 - copyright@yappier.albert1.com</p>
            </div>
        </div>

    </div>
</body>

</html>