<?php

require_once "HTML_string_raw_class.php";

class HTML_tag_raw_class extends HTML_string_raw_class
{
    /**
     * @var
     */

    protected string $prefix;
    protected string $suffix;

    /**
     * HTMLClass constructor.
     * @param $url
     */
    public function __construct()
    {
        parent::__construct();
        $this->prefix = "<";
        $this->suffix = ">";
    }



    public function TagRaw($start = Null): array
    {

        $RawStringArr=$this->getString($start, $this->prefix, $this->suffix);

        // воззращаем тег и позицию
        return array('position'=>$RawStringArr['position'],'tag'=>$RawStringArr['string']);
    }




}
