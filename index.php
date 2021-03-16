<?php
require_once("../PhpCrud/Php/component.php");
require_once ("../PhpCrud/Php/operation.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adresses</title>
    <script src="https://kit.fontawesome.com/b4335b08bf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--Custom stylesheet-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
        <div class="d-flex justify-content-center">
            <form action=""method="post" class="w-50">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-badge'></i>", "ID", "book_id",setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-book'></i>", "Book Name", "book_name",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>", "Publisher", "book_publisher",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Price", "book_price",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-placement='bottom' title='Create' "); ?>
                    <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-placement='bottom' title='Read' "); ?>
                    <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-placement='bottom' title='Update' "); ?>
                    <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toggle='tooltip' data-placement='bottom' title='Delete' "); ?>
                </div>
            </form>
        </div>
        <!--Bootstrap table-->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thread-dark">
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Publisher</th>
                    <th>Book Price</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody id="tbody">
                 <?php
                    if (isset($_POST['read'])){
                    $result = getData();

                    if($result){
                        while ($row = mysqli_fetch_assoc($result)){?>
                            <tr>
                                <td data-id="<?php echo $row['id']?>"><?php echo $row['id']?></td>
                                <td data-id="<?php echo $row['id']?>"><?php echo $row['book_name']?></td>
                                <td data-id="<?php echo $row['id']?>"><?php echo $row['book_publisher']?></td>
                                <td data-id="<?php echo $row['id']?>"><?php echo '$' . $row['book_price']?></td>
                                <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']?>"></i></td>
                            </tr>

                            <?php
                        }
                    }
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="../PhpCrud/Php/main.js"></script>
</body>
</html>