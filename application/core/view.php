<?php

//namespace application\core;


class view
{
    public $template_view = 'main_template.php'; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $data = null)
    {

//        if(is_array($data)) {
//            // преобразуем элементы массива в переменные
//            extract($data);
//        }

        include 'application/views/templates/'.$this->template_view;
    }
}
