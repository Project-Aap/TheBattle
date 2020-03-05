<?php
    include "../includes/classAutoloader.inc.php";
    require "header.php";

    $deleteId = $_GET["id"];

    $productsView = new ProductsView;
?>
    <main>
        <div class="container">
            <h1 class="mt-5 mb-5">Read product</h1>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><?=$productsView->readProductView($deleteId)[0]["nameProducts"]?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?=$productsView->readProductView($deleteId)[0]["descriptionProducts"]?></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>€<?=$productsView->readProductView($deleteId)[0]["priceProducts"]?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a class="btn btn-danger" href="index.php?page=1">Back to read products</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
<?php
    require "footer.php";
?>