<?php
    class ProductsView extends ProductsModel {
        public function getProductsView() {
            $results = $this->getProducts();

            return $results;
        }

        public function readProductView($readId) {
            $results = $this->readProduct($readId);

            return $results;
        }
    }
?>