<?php
    require "header.php";
?>
    <main>
        <div class="container">
            <h1 class="mt-5 mb-5">Create product</h1>
            <?php
                if (isset($_GET["create"])) {
                    $createCheck = $_GET["create"];

                    if ($createCheck == "emptyFields") {
                        echo "<div class=\"alert alert-danger\">You didn't fill in all fields</div>";
                    } elseif ($createCheck == "success") {
                        echo "<div class=\"alert alert-success\">Record was saved</div>";
                    }
                }
            ?>
            <form action="../includes/create.inc.php" method="POST">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input class="w-100" type="text" name="createName">
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <input class="w-100" type="text" name="createDescription">
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>
                                <input class="w-100" type="number" name="createPrice">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="mr-2 btn btn-primary" type="submit" name="createButton" value="Save">
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