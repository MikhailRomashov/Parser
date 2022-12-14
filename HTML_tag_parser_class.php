<?php

require_once "HTML_tag_pure_class.php";
require_once "HTML_parser_interface.php";

class HTML_tag_parser_class extends HTML_tag_pure_class implements HTML_parser_interface
{

    /**
     * @param string $url
     * @return array
     */

    public function parser($url): array
    {
        $this->setHtml($url);


        while(($result = $this->TagPure())['status'] == 'success')
        {
            if($result['tag'])
            {
                //такая дикая конструкция нужна потому что в php8 нельзя сделать инкремент несуществующего элемента массива
                $tag_array[$result['tag']] = isset($tag_array[$result['tag']]) ? $tag_array[$result['tag']]+1:1;
            }
        }

       return $tag_array;
    }







}
