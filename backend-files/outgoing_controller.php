<?php 

    include('db_connection.php');

    class Outgoing {

        private $outgoingId;
        private $productId;
        private $quantity;
        private $connection;

        public function setAddOutgoing_info ($outgoingId, $productId, $quantity, $connection) {
            $this->outgoingId = $outgoingId;
            $this->productId = $productId;
            $this->quantity = $quantity;
            $this->connection = $connection;
        }

        public function setOutDeletegoing_info ($outgoingId, $connection) {
            $this->outgoingId = $outgoingId;
            $this->connection = $connection;
        }

        public function generateId() {
            $this->outgoingId = uniqid();
        }

        public function addOutgoing() {
            $insert = "INSERT INTO outgoing(outgoingId, productId, quantity) VALUES($this->outgoingId, $this->productId, $this->quantity)";

            $query = mysqli_query($this->connection, $insert);

            if($query && ($query->num_rows != 0)) {
                "Location ../front-files/dashboard?message = New inventory added";
            }
        }
    }

    if(isset($_GET['addoutgoing']) && ($_GET['addoutgoing'] == TRUE)) {

        $newOutGoing = new Outgoing();
        $newOutGoing ->setAddOutgoing_info($_GET['outgoingId'], $_GET['productId'], $_GET['quantity'], $_GET['connection']);
        $newOutGoing->generateId();
        $newOutGoing->addOutgoing();
    }
?>