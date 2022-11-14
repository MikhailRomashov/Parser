<?php
namespace App\Parser;

require_once 'C:\Users\michel\PhpstormProjects\parser-symfony\my_project_directory\vendor\autoload.php';


$parser = new HTML_tag_parser_class();

$tag_array = $parser->parser('https://vkbot24.ru');
var_dump($tag_array);


