<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserting Products</title>
</head>
<body bgcolor="#87ceeb">

    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table align="center" width="750px" bgcolor="orange" border="2">
            <tr align="center">
                <td colspan="7"><h2>Insert New Post Here</h2></td>
            </tr>
            <tr>
                <td align="right"><b>Product Title:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Category:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Brand:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Price:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Description:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr>
                <td align="right"><b>Product Keywords:</b></td>
                <td><input type="text" name="product_title"></td>
            </tr>
            <tr align="center">
                 <td colspan="7"><input type="submit" name="insert_post" value="Insert Now"></td>
            </tr>
        </table>
    </form>
</body>
</html>