<?php
    include "../includes/classAutoloader.inc.php";
    require "header.php";

    $productsView = new ProductsView;

    if (empty($_GET["page"])) {
        header("Location: index.php?page=1");
        exit;
    }
?>
    <main>
        <div class="container">
            <h1 class="mt-5 mb-5">Read products</h1>
            <?php
                if (isset($_GET["delete"])) {
                    $deleteCheck = $_GET["delete"];

                    if ($deleteCheck == "success") {
                        echo "<div class=\"alert alert-success\">Record was deleted</div>";
                    }
                }
            ?>
            <a class="mb-2 btn btn-primary" href="create.php">Create new product</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i = 1; $i <= ceil(sizeof($productsView->getProductsView()) / 5); $i++) {
                            if ($_GET["page"] == $i) {
                                foreach (array_slice($productsView->getProductsView(), ($i - 1) * 5, 5) as $item) {
                                    $idProducts = $item["idProducts"];
                                    $nameProducts = $item["nameProducts"];
                                    $descriptionProducts = $item["descriptionProducts"];
                                    $priceProducts = $item["priceProducts"];
        
                                    echo "<tr>";
                                        echo "<td>$idProducts</td>";
                                        echo "<td>$nameProducts</td>";
                                        echo "<td>$descriptionProducts</td>";
                                        echo "<td>€$priceProducts</td>";
                                        echo "<td class=\"d-flex\">";
                                            echo "<a class=\"mr-2 btn btn-info\" href=\"read.php?id=$idProducts\">Read</a>";
                                            echo "<a class=\"mr-2 btn btn-primary\" href=\"update.php?id=$idProducts\">Edit</a>";
                                            echo "";
                                            echo "<form action=\"../includes/delete.inc.php?id=$idProducts\" method=\"POST\">";
                                                echo "<input class=\"btn btn-danger\" type=\"submit\" name=\"deleteButton\" value=\"Delete\">";
                                            echo "</form>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>
            <nav class="mt-4 d-flex justify-content-center">
                <ul class="pagination">
                    <?php
                        for ($i = 1; $i <= ceil(sizeof($productsView->getProductsView()) / 5); $i++) {
                            echo "<li class=\"page-item\"><a class=\"page-link\" href=\"index.php?page=$i\">$i</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </main>
<?php
    require "footer.php";
?>