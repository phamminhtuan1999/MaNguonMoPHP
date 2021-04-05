<?php
require_once("./config/db.class.php");

class Product
{
    public $productID;
    public $productName;
    public $cateID;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    public function __construct($pro_name, $cate_id, $price, $quantity, $desc, $picture)
    {
        // code
        $this->productName = $pro_name;
        $this->cateID = $cate_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $desc;
        $this->picture = $picture;
    }
    // luu san pham
    public function save()
    {
        // xứ lý upload hình ảnh
        $file_temp = $this->picture['tmp_name'];
        $user_file = $this->picture['name'];
        // $file_temp = $this->picture;
        // $user_file = $this->picture;
        $timestamp = date("Y") . date("m") . date("d") . date("h") . date("i") . date("s");
        $filepath = "../images" . $timestamp . $user_file;
        if (move_uploaded_file($file_temp, $filepath) == false) {
            return false;
        }
        //end upload file
        $db = new Db();
        // thêm project vào CSDL
        $sql = "insert into Product (ProductName, CateID, Price, Quantity, Description, Picture) value
        ('$this->productName','$this->cateID','$this->price','$this->quantity','$this->description','$filepath')";
        $result = $db->query_execute($sql);
        return $result;
    }
    // Lấy danh sách sản phẩm
    public static function list_product()
    {
        $db = new Db();
        $sql = "select * from product";
        $result = $db->select_to_array($sql);
        return $result;
    }
    // Lấy danh sách sản phẩm theo loại sản phẩm
    public static function list_product_by_cateid($cateid)
    {
        $db = new Db();
        $sql = "SELECT * FROM product WHERE CateID='$cateid'";
        $result = $db->select_to_array($sql);
        return $result;
    }
    // Lấy danh sách sản phẩm cùng loại
    public static function list_product_relate($cateid, $id)
    {
        $db = new Db();
        $sql = "SELECT * FROM `product` WHERE CateID='$cateid' AND ProductID!='$id'";
        $result = $db->select_to_array($sql);
        return $result;
    }
    public static function get_product($id)
    {
        $db = new Db();
        $sql = "SELECT * FROM `product` WHERE ProductID = '$id'";
        $result = $db->select_to_array($sql);
        return $result;
    }
}