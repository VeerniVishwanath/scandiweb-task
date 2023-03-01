<?php
include('components/header.php');
?>

<title>Product Add</title>

<!--  Javascript for handling DropDown Menu -->
<script type="text/javascript">
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var val = $(this).attr("value");
                if (val) {
                    $(".optionClass").not("." + val).hide();
                    $(".optionClass").not("." + val).find("input").removeAttr("required")
                    $("." + val).show();
                    $("." + val).find('input').attr("required", "required")

                } else {
                    $(".optionClass").hide();
                    $(".optionClass").find('input').removeAttr("required")
                }
            });
        }).change();
    });
</script>

</head>

<!-- Body -->

<body>
    <div class="p-8">
        <!-- Header Start -->
        <div class="flex justify-between p-4 ">
            <div>
                <h1 class="text-3xl font-bold ">Product Add</h1>
            </div>
            <div class="flex font-bold">
                <button form="product_form" class="border-2 border-gray-500 mr-4 bg-blue-300 px-4 rounded-md" name="save">Save</button>
                <input type="reset" value="Cancel" onclick="location.href='/scandiweb-task/';" class="border-2 border-gray-500 mr-4 bg-blue-300 px-4 rounded-md">
            </div>
        </div>
        <!-- Header End -->

        <hr class="border border-gray-500">

        <!-- Form Start -->
        <div class="p-4 py-12">
            <!-- Form -->
            <form action="form-handling.php" method="post" id="product_form">

                <div class="grid grid-cols-4 w-1/4">
                    <div class="self-center "><label for="sku">SKU </label></div>
                    <input class="col-span-3 my-1 ml-4 border-2 border-gray-500 rounded-md" type="text" name="sku" id="sku" required>
                    <div class="self-center "><label for="name">Name </label></div>
                    <input class="col-span-3 my-1 ml-4 border-2 border-gray-500 rounded-md" type="text" name="name" id="name" required>
                    <div class="self-center "><label for="price">Price ($) </label></div>
                    <input class="col-span-3 my-1 ml-4 border-2 border-gray-500 rounded-md" type="number" name="price" id="price" step="0.01" required>
                </div>

                <!-- Drop Down Menu -->
                <div class="mt-10">
                    <label for="productType">Type Switcher</label>
                    <select name="productType" id="productType" required class="bg-blue-300 ml-4 border-2 border-gray-500 rounded-md p-1 text-sm font-bold">
                        <option class="font-[500]" value="" selected hidden disabled> Please choose...</option>
                        <option class="font-[500]" value="DVD" id="DVD">DVD</option>
                        <option class="font-[500]" value="Book" id="Book">Book</option>
                        <option class="font-[500]" value="Furniture" id="Furniture">Furniture</option>
                    </select>
                </div>
                <br>
                <!-- Option Box for DVD -->
                <div class="DVD optionClass grid grid-cols-4 border-2 border-gray-500 rounded-sm p-4 max-w-xs py-6">
                    <label for="size">Size(MB)</label>
                    <input class="col-span-3 ml-8 border-2 border-gray-500 rounded-md" type="number" name="size" id="size">
                    <div class="col-span-4 pt-10 text-sm">" Please provide size of the DVD in Megabytes (MB) " </div>
                </div>

                <!-- Option Box for Furniture -->
                <div class="Furniture optionClass grid grid-cols-4 max-w-xs border-2 border-gray-500 rounded-sm p-4 py-6">
                    <div class="self-center"><label for="height">Height(CM)</label></div>
                    <input class="col-span-3 ml-8 my-1 border-2 border-gray-500 rounded-md" type="number" name="height" id="height">

                    <div class="self-center"><label for="width">Width(CM)</label></div>
                    <input class="col-span-3 ml-8 my-1 border-2 border-gray-500 rounded-md" type="number" name="width" id="width">

                    <div class="self-center"><label for="length">Length(CM)</label></div>
                    <input class="col-span-3 ml-8 my-1 border-2 border-gray-500 rounded-md" type="number" name="length" id="length">

                    <div class="col-span-4 pt-10 text-sm">" Please provide Dimensions of the Furniture in the format HxWxL " </div>
                </div>

                <!-- Option Box for Books -->
                <div class="Book optionClass grid grid-cols-4 border-2 border-gray-500 rounded-sm p-4 max-w-xs py-6">
                    <label for="book">Weight(KG)</label>
                    <input class="col-span-3 ml-8 border-2 border-gray-500 rounded-md " type="number" name="weight" id="weight">

                    <div class="col-span-4 pt-10 text-sm">" Please provide weight of the Books in Kilograms (KG). " </div>
                </div>

            </form>
        </div>
        <!-- Form End -->

        <?php
        include("components/footer.php")
        ?>