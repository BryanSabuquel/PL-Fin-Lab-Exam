<!DOCTYPE html>
<html>
<body>
    <?php
        // Declare the arrays Fruits and Vegetables, Desserts, Hygiene Products.
        $fruitsVeggiess = [];
        $desserts = [];
        $hygieneProducts = [];

        // Append each with 3 products
        array_push($fruitsVeggiess, "Banana", "Tomato", "Eggplant");
        array_push($desserts, "Halo-Halo", "Leche flan", "Cassava cake");
        array_push($hygieneProducts, "Soap", "Shampoo", "Toothpaste");

        // Print the appended arrays
        echo "<h2>Fruits and Vegetables:</h2>";
        foreach ($fruitsVeggiess as $Products) {
            echo "<li>$Products</li>";
        }
        echo "<h2>Desserts:</h2>";
        foreach ($desserts as $Products) {
            echo "<li>$Products</li>";
        }
        echo "<h2>Hygiene Products:</h2>";
        foreach ($hygieneProducts as $Products) {
            echo "<li>$Products</li>";
        }

        // Merge all arrays in 1 array named grocery cart
        $groceryCart = array_merge($fruitsVeggiess, $desserts, $hygieneProducts);

        // count the number of products in the grocery cart
        $gCartLength = count($groceryCart);

        // Print all products
        echo "<h3>The Grocery List:</h3>";
        foreach ($groceryCart as $Products) {
            echo "<li>$Products</li>";
        }

        // print the total number products
        echo "<hr><h3>The Total number of items in the List is $gCartLength.</h3>";
    ?>
</body>
</html>