<?php
    class ArticlesView extends ArticlesModel {
        public function getArticlesTrueView() {
            $results = $this->getArticlesTrue();

            return $results;
        }

        public function getArticlesView() {
            $results = $this->getArticles();

            return $results;
        }

        public function readArticleView($readId) {
            $results = $this->readArticle($readId);

            return $results;
        }
    }
?>