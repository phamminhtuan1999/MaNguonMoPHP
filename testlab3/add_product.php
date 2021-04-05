<?php
require_once("./entities/product.class.php");
require_once("./entities/category.class.php");
if (isset($_POST["btnsubmit"])) {
	// lấy giá trị từ form collection
	$productName = $_POST["txtName"];
	$cateID = $_POST["txtCateID"];
	$price = $_POST["txtprice"];
	$quantity = $_POST["txtquantity"];
	$description = $_POST["txtdesc"];
	$picture = $_FILES["txtpic"];

	// khởi tạo đối tượng product
	$newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);
	//var_dump($newProduct);

	// luu xuong CSDL
	$result = $newProduct->save();

	if (!$result) {
		// Truy van loi
		header("Location: add_product.php?failure");
	} else {
		header("Location: add_product.php?inserted");
	}
}
?>
<?php
include_once("header.php");
?>

<?php
if (isset($_GET["inserted"])) {
    echo "<h2>Thêm sản phẩm thành công</h2>";
}
?>

<div class="container">
    <!-- Form sản phẩm -->
    <form method="post" enctype="multipart/form-data">
        <!-- Tên sản phẩm -->
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input class="form-control" type="text" name="txtName"
                value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>">
        </div>

        <!-- <div class="row">
            <div class="lbltitle">
                <label>Tên sản phẩm</label>
            </div>
            <div class="lblinput">
                <input type="text" name="txtName"
                    value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>">
            </div>
        </div> -->
        <!-- Mô tả sản phẩm -->
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
            <textarea class="form-control" name="txtdesc" cols="21" rows="10"
                value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>"></textarea>
        </div>
        <!-- <div class="row">
            <div class="lbltitle">
                <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
            </div>
            <div class="lblinput">
                <textarea name="txtdesc" cols="21" rows="10"
                    value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>"></textarea>
            </div>
        </div> -->
        <!-- Số lượng sản phẩm -->
        <div class="form-group">
            <label>Số lượng sản phẩm</label>
            <input class="form-control" type="number" name="txtquantity"
                value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>">
        </div>
        <!-- <div class="row">
            <div class="lbltitle">
                <label>Số lượng sản phẩm</label>
            </div>
            <div class="lblinput">
                <input type="number" name="txtquantity"
                    value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>">
            </div>
        </div> -->
        <!-- Giá sản phẩm -->
        <div class="form-group">
            <label>Giá sản phẩm</label>
            <input class="form-control" type="number" name="txtprice"
                value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>">
        </div>
        <!-- <div class="row">
            <div class="lbltitle">
                <label>Giá sản phẩm</label>
            </div>
            <div class="lblinput">
                <input type="number" name="txtprice"
                    value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>">
            </div>
        </div> -->
        <!-- Loại sản phẩm -->
        <div class="form-group">
            <label>Chọn Loại sản phẩm</label>
            <select multiple class="custom-select" name="txtCateID">
                <option value="" selected>----Chọn loại máy----</option>
                <?php
					$cates = Category::list_category();
					foreach ($cates as $item) {
						echo "<option value = " . $item["CateID"] . ">" . $item["CategoryName"] . "</option>";
					}
					?>
            </select>
        </div>
        <!-- <div class="row">
            <div class="lbltitle">
                <label>Chọn Loại sản phẩm</label>
            </div>
            <div class="lblinput">
                <select name="txtCateID">
                    <option value="" selected>----Chọn loại máy----</option>
                    <?php
					$cates = Category::list_category();
					foreach ($cates as $item) {
						echo "<option value = " . $item["CateID"] . ">" . $item["CategoryName"] . "</option>";
					}
					?>
                </select>
            </div>
        </div> -->
        <!-- Hình sản phẩm -->
        <div class="form-group">
            <label>Đường dẫn hình ảnh</label>
            <input class="form-control-file" type="file" id="txtpic" name="txtpic" accept=".PNG. .GIF, .JPG">
        </div>
        <!-- <div class="row">
            <div class="lbltitle">
                <label>Đường dẫn hình ảnh</label>
            </div>
            <div class="lblinput">
                <input type="file" id="txtpic" name="txtpic" accept=".PNG. .GIF, .JPG">
            </div>
        </div> -->
        <!-- Btn submit -->
        <input class="btn btn-primary" type="submit" name="btnsubmit" value="Thêm Sản phẩm">
        <!-- <div class="row">
            <div class="submit">
                <input type="submit" name="btnsubmit" value="Thêm Sản phẩm">
            </div>
        </div> -->
    </form>
</div>

<?php
include_once("footer.php");
?>