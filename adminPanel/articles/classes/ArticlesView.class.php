<?php
    class ArticlesView extends ArticlesModel {
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