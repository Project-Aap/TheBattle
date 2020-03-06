<?php
    class ArticlesView extends ArticlesModel {
        public function getArticlesView() {
            $results = $this->getArticles();

            return $results;
        }
    }
?>