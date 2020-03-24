<?php
    require "header.php";

    $id = $_GET["id"];
?>
    <main>
        <div class="container">
            <h1 class="mt-5 mb-5">Edit</h1>
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
            <form action="includes/update.inc.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td class="w-100">
                                <div class="form-group">
                                    <label for="title">Enter a title:</label>
                                    <input id="title" class="form-control" type="text" name="title" value="<?=$articlesView->readArticleView($id)[0]["titleArticles"]?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td class="w-100">
                                <div class="form-group">
                                    <label for="description">Enter a description:</label>
                                    <textarea id="description" class="form-control" type="text" name="description" rows="10"><?=$articlesView->readArticleView($id)[0]["descriptionArticles"]?></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td class="w-100">
                                <div class="form-group mb-0">
                                    <label for="input-file">Enter a file:</label>
                                    <input id="input-file" class="form-control-file" type="file" name="file">
                                    <img id="image-preview-image" class="mt-3" src="uploads/images/<?=$articlesView->readArticleView($id)[0]["fileArticles"]?>" alt="Article Image">
                                    <span id="image-preview-text"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="w-100">
                                <input class="mr-2 btn btn-primary" type="submit" name="update" value="Update">
                                <a class="btn btn-danger" href="index.php?page=1">Back to create articles</a>
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