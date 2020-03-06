<?php
    class ArticlesController extends ArticlesModel {
        public function createArticleController($title, $description, $file) {
            $this->createArticle($title, $description, $file);
        }

        public function deleteArticlesController($deleteId) {
            $this->deleteArticles($deleteId);
        }
    }
?>