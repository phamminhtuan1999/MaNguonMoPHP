<?php
require_once("./config/db.class.php");
// code
class Category
{
    public $cateID;
    public $categoryName;
    public $description;
    public function __construct($cate_name, $desc)
    {
        // code...
        $this->categoryName = $cate_name;
        $this->description = $desc;
    }
    // lấy danh sach chuyên mục loại sản phẩm
    public static function list_category()
    {
        $db = new Db();
        $sql = "Select * from category";
        $result = $db->select_to_array($sql);
        return $result;
    }
}
?>
