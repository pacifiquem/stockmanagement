<?php

    include('db_connection.php');

    class Inventory {

        private $inventoryId;
        private $quantity;
        private $productId;
        private $connection;

        function setAddInventory_info($quantity, $productId, $connection) {
            $this->quantity = $quantity;
            $this->productId = $productId;
            $this->connection = $connection;
        }

        public function generateId() {
            $this->productId = uniqid();
        }

        function addInventory() {

            $insert = "INSERT INTO stk_inventory(inventory_id, quantity, productId) VALUES('$this->inventoryId', '$this->quantity, $this->productId')";
            $query = mysqli_query($this->connection, $insert);

            if($query && ($query->num_rows != 0)) {
                header("Location: ../front-files/dashboard.php?message=New stock inventory added");
            }
        }

    }

    if(isset($_GET['addinventory']) && ($_GET['addinventory'] == TRUE)) {
        $newInventory = new Inventory();
        $newInventory->setAddInventory_info($_GET['quantity'], $_GET['productId'], $dbConnection);
        $newInventory->generateId();
        $newInventory->addInventory();
    }

?>