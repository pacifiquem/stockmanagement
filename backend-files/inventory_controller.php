<?php

    include('db_connection.php');

    class Inventory {

        private $inventoryId;
        private $quantity;
        private $productId;
        private $connection;

        public function setAddInventory_info($quantity, $productId, $connection) {
            $this->quantity = $quantity;
            $this->productId = $productId;
            $this->connection = $connection;
        }

        public function setDeleteInventory_info($inventoryId, $connection) {

            $this->inventoryId = $inventoryId;
            $this->connection = $connection;

        }

        public function generateId() {
            $this->inventoryId = uniqid();
        }

        public function addInventory() {

            $insert = "INSERT INTO stk_inventory(inventory_id, quantity, productId) VALUES('$this->inventoryId', '$this->quantity', $this->productId')";
            $query = mysqli_query($this->connection, $insert);

            if($query && ($query->num_rows != 0)) {
                header("Location: ../front-files/dashboard.php?message=New stock inventory added");
            }
        }


        public function deleteInventory() {

            $delete = "DELETE FROM stk_inventory WHERE inventory_id = '$this->inventoryId'";
            $query = mysqli_query($this->connection, $delete);

            if($query) {
                header("Location ../front-files/dashboard.php?message=Inventory ($this->inventoryId) Deleted Successfully");
            }else {
                header("Location ../front-files/dashboard.php?message=Unable to delete Inventory with id ($this->inventoryId);");
            }
        }

    }

    if(isset($_GET['addinventory']) && ($_GET['addinventory'] == TRUE)) {
        $newInventory = new Inventory();
        $newInventory->setAddInventory_info($_GET['quantity'], $_GET['productId'], $dbConnection);
        $newInventory->generateId();
        $newInventory->addInventory();
    }

    if(isset($_GET['deleteinventory']) && ($_GET['deleteinventory'] == TRUE)) {

        $deleteInventory = new Inventory;
        $deleteInventory->setDeleteInventory_info($_GET['inventoryId'], $dbConnection);
        $deleteInventory->deleteInventory();

    }

?>