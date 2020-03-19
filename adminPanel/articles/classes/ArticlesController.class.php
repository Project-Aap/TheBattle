<?php
    class ArticlesController extends ArticlesModel {
        public function createArticleController($title, $description, $file) {
            $this->createArticle($title, $description, $file);
        }

        public function deleteArticlesController($deleteId) {
            $this->deleteArticles($deleteId);
        }

        public function updateArticleController($title, $description, $file, $id) {
            $this->updateArticle($title, $description, $file, $id);
        }
    }
?>