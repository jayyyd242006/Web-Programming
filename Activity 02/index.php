 <html>
    <body>
        <h1>Hello,from Arjay Daraman</h1>
        <h3> My first PHP program</h3>
        
    </html>
</body>

        <?php
            echo "Hello World!<br>";
        ?>

        <?php
            $x = 15;
            $y = 3;
            $sum = $x + $y;
            echo "The sum is $sum.";
        ?>
        
        <?php
            $x = 15;
            $y = 3;
            if ($x % $y == 0) {
                echo "$y is a factor of $x <br>";
            } else {
                echo "$y is not a factor of $x <br>";
            } 
        ?>

        <h2>Step #4 </h2>
        <?php
            for($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 || $i % 5 == 0) {
                    echo "$i <br>";
                }
            }
        ?>

        <h2>Step #5 </h2>
         <?php
            $products = array("Product A", "Product B", "Product C");
            $products[1] = "Product D";
            var_dump($products);
        ?>
        <?php
            $products = array("Product A", "Product D", "Product C");
            foreach($products as $p){
                echo "$p <br>";
            }
        ?>

        <h2>Step #6</h2>
        <?php
            $product = array("name" => "Product A", "price" => 10.50, "stock" => 12);
            echo $product["name"] . "<br>";
        ?>

        <h2>Step #7</h2>
        <?php
            $products = array(
                array("name"=>"Product A", "price"=>10.50, "stock"=>12),
                array("name"=>"Product B", "price"=>5.60, "stock"=>7),
                array("name"=>"Product C", "price"=>7.00, "stock"=>5)
            );
           echo "<pre>";
           print_r($products);
           echo "</pre>";

        ?>

        <h2>Step #8</h2>
        <?php
            foreach($products as $p){
                echo $p["name"] . " is " . $p["price"] . " pesos <br>";
            }
        ?>
    </body>
</html>

  
   

