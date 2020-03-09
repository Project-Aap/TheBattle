<?php
    include "../includes/classAutoloader.inc.php";
    require "header.php";

    $deleteId = $_GET["id"];

    $productsView = new ProductsView;
?>
    <main>
        <div class="container">
            <h1 class="mt-5 mb-5">Create product</h1>
            <?php
                if (isset($_GET["update"])) {
                    $upadteCheck = $_GET["update"];

                    if ($upadteCheck == "emptyFields") {
                        echo "<div class=\"alert alert-danger\">You didn't fill in all fields</div>";
                    } elseif ($upadteCheck == "success") {
                        echo "<div class=\"alert alert-success\">Record was updated</div>";
                    }
                }
            ?>
            <form action="../includes/update.inc.php?id=<?=$deleteId?>" method="POST">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input class="w-100" type="text" name="updateName" value="<?=$productsView->readProductView($deleteId)[0]["nameProducts"]?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <input class="w-100" type="text" name="updateDescription" value="<?=$productsView->readProductView($deleteId)[0]["descriptionProducts"]?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>
                                <input class="w-100" type="number" name="updatePrice" value="<?=$productsView->readProductView($deleteId)[0]["priceProducts"]?>">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="mr-2 btn btn-primary" type="submit" name="updateButton" value="Save changes">
                                <a class="btn btn-danger" href="index.php?page=1">Back to read products</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
<?php
    require "footer.php";
?>