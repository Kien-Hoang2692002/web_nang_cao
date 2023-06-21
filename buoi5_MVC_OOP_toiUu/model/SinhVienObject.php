<?php

class SinhVienObject
{
    private int $ma;
    private string $ten;
    private string $ten_lop;
    private int $ma_lop;


    public function __construct($row)
    {
        $this->ma = $row['ma'] ?? '0'; 
        $this->ten = $row['ten'] ?? "0"; 
        $this->ma_lop = $row['ma_lop'] ?? '0';  
        $this->ten_lop = $row['ten_lop'] ?? '';  
    }

	public function getMa(){
		return $this->ma;
	}

	public function setMa(int $value) {
		$this->ma = $value;
	}

	public function getTen() : string {
		return $this->ten;
	}

	public function setTen(string $value) {
		$this->ten = $value;
	}

	public function getMa_lop() : int {
		return $this->ma_lop;
	}

	public function setMa_lop(int $value) {
		$this->ma_lop = $value;
	}

	public function getTen_lop() : string {
		return $this->ten_lop;
	}
}