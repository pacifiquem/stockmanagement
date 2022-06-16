<?php

include('./db_connection.php');

class Product {

    private $productId;
    private $product_Name;
    private $brand;
    private $supplier_phone;
    private $supplier;
    private $added_date;
    private $connection;

    public function setAddandUpdateProductInfo($productId, $product_Name, $brand, $supplier_phone, $supplier) {
        $this->productId = $productId;
        $this->product_Name = $product_Name;
        $this->brand = $brand;
        $this->supplier_phone = $supplier_phone;
        $this->supplier = $supplier;
    }

    public function setDeleteProductInfo($productId, $connection) {
        $this->productId = $productId;
        $this->connection = $connection;
    }

    public function generateId() {
        $this->productId = uniqid();
    }

    public function addProduct() {
        $insert = "INSERT INTO product(productId, product_Name, brand, supplier_phone, supplier, added_date) VALUES('$this->productId', '$this->product_Name', '$this->brand', '$this->supplier_phone', '$this->supplier')";

        $query = mysqli_query($this->connection, $insert);
        if($query) {
            "Location: ../front-files/dashboard.php?message=New product added.";
        }
    }

    public function deleteProduct() {
        $delete = "DELETE FROM products WHERE productId='$this->productId'";
        $query = mysqli_query($this->connection ,$delete);
        if($query) {
            header("Location: ../front-files/dashboard.php?message=Product deleted successfully");
        }else {
            header("Location: ../front-files/dashboard.php?message=Unable to delete product");
        }
    }

}


if(isset($_GET['addproduct']) && ($_GET['addproduct'] == TRUE)){
    $newProduct = new Product();
    $newProduct-> setAddandUpdateProductInfo($_GET['productId'], $_GET['product_Name'], $_GET['brand'], $_GET['supplier_phone'], $_GET['supplier']);
    $newProduct->generateId();
    $newProduct->addProduct();
}

if(isset($_GET['deleteProduct']) && ($_GET['deleteProduct'] == TRUE)){
    $deleteProduct = new Product();
    $deleteProduct-> setDeleteProductInfo($_GET['productId'], $dbConnection);
    $deleteProduct->deleteProduct();
}

?>