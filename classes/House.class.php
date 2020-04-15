<?php

class House
{
    private $diachi;
    private $dientinh;
    private $tenchunha;
    public function themThongTin($diachi,$dientich,$tenchunha){
        $this->diachi =$diachi;
        $this->dientinh =$dientich;
        $this->tenchunha = $tenchunha;
    }
    public function layThongTin(){
        return [
            'diachi'=>$this->diachi,
            'dientich'=>$this->dientinh,
            'tenchunha'=>$this->tenchunha
        ];
    }
}

