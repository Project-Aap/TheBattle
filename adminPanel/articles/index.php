<?php
    require "header.php";
?>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm">
                    <form action="includes/create.inc.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Enter a title:</label>
                            <input id="title" class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Enter a description:</label>
                            <textarea id="description" class="form-control" type="text" name="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-file">Enter a file:</label>
                            <input id="input-file" class="form-control-file" type="file" name="file">
                            <div id="image-preview" class="image-preview mt-3 d-flex justify-content-center align-items-center">
                                <img id="image-preview-image" class="image-preview-image" src="" alt="Image Preview">
                                <span id="image-preview-text" class="image-preview-text">Image Preview</span>
                            </div>
                        </div>
                        <input class="btn btn-success" type="submit" name="create" value="Create">
                    </form>
                </div>
                <div class="col-sm">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($articlesView->getArticlesView() as $item) {
                                    $id = $item["idArticles"];
                                    $title = $item["titleArticles"];

                                    echo "<tr>";
                                        echo "<td>$title</td>";
                                        echo "<td class=\"d-flex\">";
                                            echo "<a class=\"btn btn-primary ml-2\" href=\"read.php?id=$id\">Read</a>";
                                            echo "<a class=\"btn btn-info ml-2\" href=\"update.php?id=$id\">Edit</a>";
                                            echo "<form action=\"includes/delete.inc.php?id=$id\" method=\"POST\">";
                                                echo "<input class=\"btn btn-danger ml-2\" type=\"submit\" name=\"delete\" value=\"Delete\">";
                                            echo "</form>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
    require "footer.php";
?>