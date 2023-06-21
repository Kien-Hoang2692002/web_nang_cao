<?php

class LopObject
{
    private int $ma;
    private string $ho;
    private string $ten;

    public function __construct($row)
    {
        $this->ma = $row['ma'] ?? '0'; 
        $this->ho = $row['ho']; 
        $this->ten = $row['ten']; 
    }

	public function getMa(){
		return $this->ma;
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

    public function getHoTen() : string {
		return $this->ho." ".$this->ten;
	}
}