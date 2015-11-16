<!DOCTYPE html>
<?php
include '../includes/db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserting Products</title>
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

</head>
<body bgcolor="#87ceeb">

    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table align="center" width="600px" bgcolor="orange" border="2">
            <tr align="center">
                <td colspan="7"><h2>Insert New Post Here</h2></td>
            </tr>
            <tr>
                <td align="right"><b>Product Title:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Category:</b></td>
                <td>
                   <select name="product_cat" >
                        <option>Select a category</option>
                       <?php
                       $get_cats = "select * from categories";
                       $run_cats = mysqli_query($con,$get_cats);

                       while ($row_cats = mysqli_fetch_array($run_cats)){
                           $cat_id = $row_cats['cat_id'];
                           $cat_title = $row_cats['cat_title'];
                           echo "<option value='$cat_id'>$cat_title</option>";
                       }
                       ?>

                   </select>

                </td>
            </tr>
            <tr>
                <td align="right"><b>Product Brand:</b></td>
                <td>

                    <select name="product_cat" >
                        <option>Select a brand</option>
                        <?php
                        $get_brands = "select * from brands";
                        $run_brands = mysqli_query($con,$get_brands);

                        while ($row_brands = mysqli_fetch_array($run_brands)){
                            $brand_id = $row_brands['brand_id'];
                            $brand_title = $row_brands['brand_title'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Product Image:</b></td>
                <td><input type="file" name="product_image"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Price:</b></td>
                <td><input type="text" name="product_price"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Description:</b></td>
                <td><textarea name="product_desc" cols="20" rows="10"></textarea> </td>
            </tr>
            <tr>
                <td align="right"><b>Product Keywords:</b></td>
                <td><input type="text" name="product_keywords"></td>
            </tr>
            <tr align="center">
                 <td colspan="7"><input type="submit" name="insert_post" value="Insert Now"></td>
            </tr>
        </table>
    </form>
</body>
</html>