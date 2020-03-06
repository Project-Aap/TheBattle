<?php
    class ArticlesModel extends Dbh {
        protected function getArticles() {
            $sql = "SELECT * FROM articles";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function createArticle($title, $description, $file) {
            $sql = "INSERT INTO articles (titleArticles, descriptionArticles, fileArticles) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $description, $file]);
        }

        protected function updateProduct($id, $title, $description, $file) {
            $sql = "UPDATE products SET nameProducts = ?, descriptionProducts = ?, priceProducts = ? WHERE idProducts = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id, $title, $description, $file]);
        }

        protected function deleteArticles($id) {
            $sql = "DELETE FROM articles WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }
?>