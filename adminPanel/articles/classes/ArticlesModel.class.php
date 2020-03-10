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

        protected function readArticle($id) {
            $sql = "SELECT * FROM articles WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function updateArticle($title, $description, $file, $id) {
            $sql = "UPDATE articles SET titleArticles = ?, descriptionArticles = ?, fileArticles = ? WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $description, $file, $id]);
        }

        protected function deleteArticles($id) {
            $sql = "DELETE FROM articles WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }
?>