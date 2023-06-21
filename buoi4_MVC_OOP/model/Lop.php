<?php

require "model/connect.php";

class Lop
{   
    private int $ma;
    private string $ho;
    private string $ten;

    public function get_ho_ten()
    {
        return $this->ho. ' . ' .$this->ten;
    }

	public function getMa(){
		return $this->ma;
	}

    public function showMa(){
		return "#" . $this->ma;
	}

	public function setMa(int $value) {
		$this->ma = $value;
	}

	public function getHo() : string {
		return $this->ho;
	}

	public function setHo(string $value) {
		$this->ho = $value;
	}

	public function getTen() : string {
		return $this->ten;
	}

	public function setTen(string $value) {
		$this->ten = $value;
	}

    public function all()
    {
        

        $sql = "select * from lop3";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach($result as $row){
            $object = new self();
            $object->setMa($row['ma']);
            $object->setHo($row['ho']);
            $object->setTen($row['ten']);

            $arr[] = $object;
    }

        return $arr;
    }

    public function create($ho , $ten): void
    {
        
        $object = new self();
        $object->setHo($ho);
        $object->setTen($ten);
        
        

        $sql = "insert into lop3(ho, ten)
                values ('{$object->ho}','{$object->ten}')";

        (new Connect())->excute($sql);
    }

    public function find($ma)
    {
        
        $sql = "select * from lop3
                where ma = '$ma'";

        $result = (new Connect())->select($sql);
        $row = mysqli_fetch_array($result);

        $object = new self();
        $object->setMa($row['ma']);
        $object->setHo($row['ho']);
        $object->setTen($row['ten']);


        return $object;
    }
   
    public function update($ma, $ho , $ten): void
    {
        
        $object = new self();
        $object->setMa($ma);
        $object->setHo($ho);
        $object->setTen($ten);

        $sql = "update lop3 set
                ho = '$object->ho',
                ten = '$object->ten'
                where ma = '$object->ma'";

        (new Connect())->excute($sql);

    }

    public function destroy($ma): void
    {
            

        $sql = "delete from lop3
                where ma = '$ma'";

        (new Connect())->excute($sql);

    }
}

