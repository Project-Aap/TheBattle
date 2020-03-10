<?php
    require "header.php";

    $id = $_GET["id"];
?>
    <main>
        <div class="container">
            <h1 class="mt-5 mb-5">Read product</h1>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Title</td>
                        <td class="w-100"><?=$articlesView->readArticleView($id)[0]["titleArticles"]?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td class="w-100"><?=$articlesView->readArticleView($id)[0]["descriptionArticles"]?></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td class="w-100"><img src="uploads/images/<?=$articlesView->readArticleView($id)[0]["fileArticles"]?>" alt="Article Image"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="w-100"><a class="btn btn-danger" href="index.php?page=1">Back to read products</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
<?php
    require "footer.php";
?>