<?php
include('components/header.php');
include('class/readList.php');
?>

<title>Product List</title>
</head>
<!-- Body -->

<body>

    <div class="p-8">
        <!-- Header Start -->
        <div class="flex justify-between p-4 ">
            <div>
                <h1 class="text-3xl font-bold ">Product List</h1>
            </div>
            <div class="flex font-bold">
                <button onclick="location.href='add-product.php';" class="border-2 border-gray-500 mr-4 bg-blue-300 px-4 rounded-md" name="add">ADD</button>
                <button form="FormId" id="delete-product-btn" class="border-2 border-gray-500 mr-4 bg-blue-300 px-4 rounded-md" name="Mass Delete">MASS DELETE</button>

            </div>
        </div>
        <!-- Header End -->

        <hr class="border border-gray-500">

        <!-- Form Start -->
        <form id="FormId" action="item-delete-handling.php" method="post">
            <div class="grid grid-cols-4">

                <?php

                $obj = new ReadList();
                $results = $obj->readList();

                if ($results->num_rows > 0) {
                    while ($row = $results->fetch_assoc()) {

                        echo '<div class="border-2 border-gray-500 rounded-md grid-cols-1 m-8 pb-14 pt-6 px-5  text-center font-bold text-lg ">';
                        echo '<div class="text-left"><input type="checkbox" name="delete-checkbox[]" class="delete-checkbox" value=' . $row["sku"] . '></br></div> ';
                        echo '<div> ' . $row["sku"] . '</br>' . $row["name"] . '</br>'  . $row["price"] .
                            ' $' . '</br>';
                        echo $row["ProductType"] == "DVD" ? 'Size: ' . $row['size'] . 'MB' : "";
                        echo $row["ProductType"] == "Book" ? 'Weight: ' . $row['weight'] . 'KG' : "";
                        echo $row["ProductType"] == "Furniture" ? 'Dimension: ' . $row['height'] . 'x' . $row["width"] . 'x' . $row["length"] : "";
                        echo '</div></div>';
                    }
                }
                ?>

            </div>

        </form>
        <!-- Form End -->

        <?php
        include('components/footer.php');
        ?>