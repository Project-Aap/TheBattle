<?php
    class ArticlesModel extends Dbh {
        protected function getArticlesTrue() {
            $sql = "SELECT * FROM articles where toggleArticles = true";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function getArticles() {
            $sql = "SELECT * FROM articles";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function showArticle($showId) {
            $sql = "UPDATE articles SET toggleArticles = true WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$showId]);
        }

        protected function hideArticle($hideId) {
            $sql = "UPDATE articles SET toggleArticles = false WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$hideId]);
        }

        protected function createArticle($title, $description, $file) {
            $sql = "INSERT INTO articles (titleArticles, descriptionArticles, fileArticles, toggleArticles) VALUES (?, ?, ?, false)";
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

        protected function updateArticle($title, $description, $file, $toggle, $id) {
            $sql = "UPDATE articles SET titleArticles = ?, descriptionArticles = ?, fileArticles = ?, toggleArticles = ? WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $description, $file, $toggle, $id]);
        }

        protected function deleteArticles($id) {
            $sql = "DELETE FROM articles WHERE idArticles = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }
?>