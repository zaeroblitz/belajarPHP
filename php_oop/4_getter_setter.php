<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    class Category {
        private string $productName;
        private bool $expensive;

        public function getProductName(): string {
            return "Get Product Name : $this->productName";
        }

        public function setProductName(string $productName): void {
            if (trim($productName) != "") {
                $this->productName = $productName;
            } else {
                $this->productName = "No Product";
            }
        }

        public function isExpensive(): bool {
            return $this->expensive;
        }

        public function setExpensive(bool $expensive): void {
            $this->expensive = $expensive;
        }
    }
?>
<body>
    
    <p>
        <?php
            $handPhone = new Category();
            $handPhone->setProductName("Samsung");
            echo "<p></p>";
            echo $handPhone->getProductName();
            echo "<p></p>";
            $handPhone->setExpensive(true);
            echo "<p></p>";
            echo "Is Expensive ? {$handPhone->isExpensive()}";
            echo "<p></p>";

            $noProduct = new Category();
            $noProduct->setProductName("");
            echo "<p></p>";
            echo $noProduct->getProductName();            
            echo "<p></p>";
            $noProduct->setExpensive(false);
            echo $noProduct->isExpensive();
        ?>
    </p>

</body>
</html>