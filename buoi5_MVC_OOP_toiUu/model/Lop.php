<?php

require 'model/connect.php';
require 'model/LopObject.php';

class Lop 
{
    public function all()
    {

        $sql = "SELECT * FROM lop3";
        $result = (new Connect())->select($sql);   

        $arr = [];
        foreach($result as $row){
            $object = new LopObject($row);
    
            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params): void
    {
        
        $object = new LopObject($params);

        $sql = "insert into lop3(ho, ten)
                values ('" . $object->getHo() . "','" . $object->getTen() . "')";

        (new Connect())->execute($sql);
    }

    public function find($ma)
    {
        
        $sql = "SELECT * FROM lop3
                WHERE ma = '$ma'";

        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new LopObject($each);
    }

    public function update($params): void
    {
        
        $object = new LopObject($params);

        $sql = "update lop3
                set 
                ho = '".$object->getHo()."',
                ten = '".$object->getTen()."'
                where ma = '".$object->getMa()."'";

        (new Connect())->execute($sql);
    }

    public function delete($ma): void
    {
        
        $sql = "DELETE FROM lop3
                WHERE ma = '$ma'";

        (new Connect())->execute($sql);
    }
}