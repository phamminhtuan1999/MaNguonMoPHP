<?php
class Db
{
    // bien ket noi csdl
    protected static $connection;
    // Ham khoi tao ket noi
    public function connect()
    {
        // ket noi toi CSDL trong truong hop ket noi chua duoc khoi tao
        if (!isset(self::$connection)) {
            // lay thong tin ket noi tu tap tin config.ini
            $config = parse_ini_file("config.ini");
            self::$connection = new mysqli("localhost", $config["username"], $config["password"], $config["databasename"]);
        }
        // xy ly loi neu khong ket noi duoc toi CSDL
        if (self::$connection == false) {
            // xu ly ghi file tai day
            return false;
        }
        return self::$connection;
    }
    //ham thuc hien xu ly cau lenh truy van
    public function query_execute($queryString)
    {
        // khoi tao ket noi
        $connection = $this->connect();
        // thuc hien execute truy van
        $connection->query("SET NAMES utf8");
        $result = $connection->query($queryString);
        // $connection->close();
        return $result;
    }
    // ham thuc hien tra ve mot mang danh sach ket qua
    public function select_to_array($queryString)
    {
        $rows = array();
        $result = $this->query_execute($queryString);
        if ($result == false)
            return false;
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }
        return $rows;
    }
}
