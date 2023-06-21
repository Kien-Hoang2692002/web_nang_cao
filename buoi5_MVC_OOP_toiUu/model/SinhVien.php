<?php

require_once 'model/connect.php';
require 'model/SinhVienObject.php';

class SinhVien 
{   
    private $table = 'sinh_vien3';
    public function all()
    {

        $sql = "SELECT 
        t.*,
        lop3.ten as ten_lop 
        FROM $this->table as t
        join lop3
        on lop3.ma = t.ma_lop ";

        $result = (new Connect())->select($sql);   

        $arr = [];
        foreach($result as $row){
            $object = new SinhVienObject($row);
    
            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params): void
    {
        
        $object = new SinhVienObject($params);

        $sql = "insert into $this->table(ten, ma_lop)
                values ('" . $object->getTen() . "','" . $object->getMa_lop() . "')";

        (new Connect())->execute($sql);
    }

    public function find($ma)
    {
        
        $sql = "SELECT * FROM $this->table
                WHERE ma = '$ma'";

        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new SinhVienObject($each);
    }

    public function update($params): void
    {
        
        $object = new SinhVienObject($params);

        $sql = "update $this->table
                set 
                ma_lop = '".$object->getMa_lop()."',
                ten = '".$object->getTen()."'
                where ma = '".$object->getMa()."'";

        (new Connect())->execute($sql);
    }

    public function delete($ma): void
    {
        
        $sql = "DELETE FROM $this->table
                WHERE ma = '$ma'";

        (new Connect())->execute($sql);
    }
}