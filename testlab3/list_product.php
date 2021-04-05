<?php
require_once("./entities/product.class.php");
require_once("./entities/category.class.php");
?>
<?php
include_once("header.php");
if (!isset($_GET["cateid"])) {
    $prods = Product::list_product();
} else {
    $cateid = $_GET["cateid"];
    $prods = Product::list_product_by_cateid($cateid);
}
$cates = Category::list_category();
//$prods = Product::list_product();
?>

<!-- Sidebar filter section -->
<section id="sidebar">
    <p>Trang chủ</p>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Danh mục</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <?php foreach ($cates as $item) { ?>
            <div class="form-group">
                <label>
                    <?php echo "<a href=./list_product.php?cateid=" . $item['CateID'] . ">" . $item['CategoryName'] . "</a>" ?>
                </label>
            </div>
            <?php }?>
        </form>
    </div>
</section>

<!-- products section -->
<section id="products">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Hiển thị <?php echo count($prods)?> kết quả</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select
                        name="sort" id="sort">
                        <option value="popularity"><b>Phổ biến</b></option>
                        <option value="prcie"><b>Giá</b></option>
                        <option value="rating"><b>Đánh giá</b></option>
                    </select> </div>
            </div>
        </div>
        <div class="row">
            <?php
                    foreach ($prods as $item) {
            ?>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img class="card-img-top img-responsive" src="<?php echo "" . $item["Picture"]; ?>" alt="Image">
                    <div class="card-body">
                        <h5><b><?php echo $item["ProductName"]; ?></b></h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted"><?php echo $item["Price"]; ?></div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign"><span class="fa fa-plus"
                                        id="orange"></span></button>
                                <span class="px-sm-1">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus"
                                        id="orange"></span></button>
                            </div>
                        </div>
                        <a href="./product_detail.php?id=<?php echo $item["ProductID"]?>"
                            class="btn w-100 rounded my-2">Chi tiết</a>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</section>



<?php
include_once("footer.php"); ?>