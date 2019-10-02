<?php
session_start();
include_once 'db_function/insurance_func.php';
include_once 'db_function/patient_func.php';
include_once 'db_function/db_helper.php';
include_once 'db_function/user_func.php';

if (!isset($_SESSION['user_logged']))
    $_SESSION['user_logged'] = false;
?>

<!DOCTYPE html>
<html class="all">
    <head>
        <title>haz3</title>
        <meta charset="UTF-8">
        <meta nama="author" content="zaldy auwww 1772031">
        <meta name="Description" content="Ruamh sakit">
        <script type="text/javascript" charset="UTF-8" src="view\datatables.js"></script>
        <script type="text/javascript" charset="UTF-8" src="view\clickButton.js"></script>
        <link rel="stylesheet" type="text/css" href="view\datatables.css">
        <link rel="stylesheet" type="text/css" href="view\styling.css">
    </head>
    <body>
        <div class="page">
            <?php
            if ($_SESSION['user_logged']) { ?>
                <header><h2 align="center">Rumah Sakit</h2></header><hr>
                <h4><?php echo "hiii " . $_SESSION['name']?></h4><hr>
                <?php if ($_SESSION['role'] == 1) {
                    ?>
                    <h4>Menu</h4>
                    <nav>
                        <ul>
                            <li><a href="?menu=u">User</a></li>
                            <li><a href="?menu=p">Patient</a></li>
                            <li><a href="?menu=i">Insurance</a></li>
                            <li><a href="?menu=out">Logout</a></li>
                        </ul>
                    </nav><br>
                    <main>
                        <?php
                        $targetMenu = filter_input(INPUT_GET, 'menu');
                        switch ($targetMenu) {
                            case 'p':
                                include_once 'view/patient.php';
                                break;
                            case 'i':
                                include_once 'view/insurance.php';
                                break;
                            case 'u':
                                include_once 'view/user.php';
                                break;
                            case 'pa_up':
                                include_once 'view/patient_update.php';
                                break;
                            case 'in_up':
                                include_once 'view/insurance_update.php';
                                break;
                            case 'u_up':
                                include_once 'view/user_update.php';
                                break;
                            case 'out':
                                session_destroy();
                                header("location:index.php");
                            default;
                        }
                        ?>
                    </main>
                    <?php
                } elseif ($_SESSION['role'] == 2) {
                    ?>
                    <nav>
                        <ul>
                            <li><a href="?menu=p">Patient</a></li>
                            <li><a href="?menu=i">Insurance</a></li>
                            <li><a href="?menu=out">Logout</a></li>
                        </ul>
                    </nav>
                    <main>
                        <?php
                        $targetMenu = filter_input(INPUT_GET, 'menu');
                        switch ($targetMenu) {
                            case 'p':
                                include_once 'view/patient.php';
                                break;
                            case 'i':
                                include_once 'view/insurance.php';
                                break;
                            case 'pa_up':
                                include_once 'view/patient_update.php';
                                break;
                            case 'in_up':
                                include_once 'view/insurance_update.php';
                                break;
                            case 'out':
                                session_destroy();
                                header("location:index.php");
                            default;
                        }
                        ?>
                    </main>
                    <?php
                } elseif ($_SESSION['role'] == 3) {?>
                    <nav>
                        <ul>
                            <li><a href="?menu=p">Patient</a></li>
                            <li><a href="?menu=out">Logout</a></li>
                        </ul>
                    </nav>
                    <main>
                        <?php
                        $targetMenu = filter_input(INPUT_GET, 'menu');
                        switch ($targetMenu) {
                            case 'p':
                                include_once 'view/patient.php';
                                break;
                            case 'pa_up':
                                include_once 'view/patient_update.php';
                                break;
                            case 'out':
                                session_destroy();
                                header("location:index.php");
                            default;
                        }
                        ?>
                    </main>
                    <?php
                }
                ?>
                    <?php
            } else {
                include_once 'view/login.php';
            }
            ?>
            <hr>
            <footer><h4 align="center">Pemrograman Web 2 &copy;2019</h4></footer>
        </div>
    </body>

    <script>
        $(document).ready(function () {
            $('#patient').DataTable();
            $('#insurance').DataTable();
            $('#user').DataTable();
        });
    </script>

</html>
