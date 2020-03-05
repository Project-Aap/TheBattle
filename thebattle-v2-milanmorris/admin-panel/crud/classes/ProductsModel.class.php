<?php
    class ProductsModel extends Dbh {
        protected function getProducts() {
            $sql = "SELECT * FROM products";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function createProduct($createName, $createDescription, $createPrice) {
            $sql = "INSERT INTO products (nameProducts, descriptionProducts, priceProducts) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$createName, $createDescription, $createPrice]);
        }

        protected function readProduct($readId) {
            $sql = "SELECT * FROM products WHERE idProducts = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$readId]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function updateProduct($updateName, $updateDescription, $updatePrice, $updateId) {
            $sql = "UPDATE products SET nameProducts = ?, descriptionProducts = ?, priceProducts = ? WHERE idProducts = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$updateName, $updateDescription, $updatePrice, $updateId]);
        }

        protected function deleteProduct($deleteId) {
            $sql = "DELETE FROM products WHERE idProducts = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$deleteId]);
        }
    }
?>