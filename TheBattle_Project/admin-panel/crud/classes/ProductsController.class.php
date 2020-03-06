<?php
    class ProductsController extends ProductsModel {
        public function createProductController($createName, $createDescription, $createPrice) {
            $this->createProduct($createName, $createDescription, $createPrice);
        }

        public function deleteProductController($deleteId) {
            $this->deleteProduct($deleteId);
        }

        public function updateProductController($updateName, $updateDescription, $updatePrice, $updateId) {
            $this->updateProduct($updateName, $updateDescription, $updatePrice, $updateId);
        }
    }
?>