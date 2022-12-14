<?php

require_once "HTML_class.php";

class HTML_string_raw_class extends HTML_class
{


    protected int $start;
    protected int $stop;

    public function __construct()
    {
        $this->start = 0;
        $this->stop =0;

    }

    public function getString($start = Null, $prefix='',$suffix=''): array
    {
        $this->start = is_null($start) ?  $this->stop : $start ;

        // проверяем выход за пределы размера обрабатываемого кода хтмл
        if($this->start >= $this->HTMLsize-1) return array('position'=>$this->start,'string'=>'');

        // начало искомой строки
        $this->start = strpos($this->html, $prefix, $this->start);

        // конец искомой строки
        $this->stop = strpos($this->html, $suffix, $this->start);

        // вычленяием всю сторку
        $raw = substr($this->html, $this->start + strlen($prefix), $this->stop - $this->start);


        // воззращаем тег и позицию
        return array('position'=>$this->stop,'string'=>$raw);
    }




}
