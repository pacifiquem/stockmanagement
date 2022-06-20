<?php

include('./db_connection.php');
echo "run";

class Product {

    private $productId;
    private $product_Name;
    private $brand;
    private $supplier_phone;
    private $supplier;
    private $added_date;
    private $connection;

    public function setAddandUpdateProductInfo($product_Name, $brand, $supplier_phone, $supplier, $connection) {
        $this->product_Name = $product_Name;
        $this->brand = $brand;
        $this->supplier_phone = $supplier_phone;
        $this->supplier = $supplier;
        $this->connection = $connection;
    }

    public function setDeleteProductInfo($productId, $connection) {
        $this->productId = $productId;
        $this->connection = $connection;
    }

    public function generateId() {
        $this->productId = uniqid();
    }

    public function getAllProducts() {
        $select = "SELECT * FROM products";
        $query = mysqli_query($this->connection, $select);
        
        if($query && ($query->num_rows > 0)) {
            $rows = mysqli_fetch_assoc($query);
            return $rows;
        }
    }

    public function addProduct() {
        $insert = "INSERT INTO products(productId, product_Name, brand, supplier_phone, supplier) VALUES('$this->productId', '$this->product_Name', '$this->brand', '$this->supplier_phone', '$this->supplier')";

        $query = mysqli_query($this->connection, $insert);
        
        if($query) {
            header("Location: ../front-files/products-view.php?message=New product added.");
        }else {
            echo "<script>console.log(mysqli_error($this->connection))</script>";
        }
    }

    public function deleteProduct() {
        $delete = "DELETE FROM products WHERE productId='$this->productId'";
        $query = mysqli_query($this->connection ,$delete);
        if($query) {
            header("Location: ../front-files/products-view.php?message=Product deleted successfully");
        }else {
            echo "<script>console.log(mysqli_error($this->connection))</script>";
            header("Location: ../front-files/products-view.php?message=Unable to delete product");
        }
    }

}


if(isset($_GET['addproduct']) && ($_GET['addproduct'] == TRUE)){

    $newProduct = new Product();
    $newProduct-> setAddandUpdateProductInfo($_GET['product_Name'], $_GET['brand'], $_GET['supplier_phone'], $_GET['supplier'], $dbConnection);
    $newProduct->generateId();
    $newProduct->addProduct();
}

if(isset($_GET['deleteProduct']) && ($_GET['deleteProduct'] == TRUE)){
    $deleteProduct = new Product();
    $deleteProduct-> setDeleteProductInfo($_GET['productId'], $dbConnection);
    $deleteProduct->deleteProduct();
}

?>