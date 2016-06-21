<?php

namespace App;

class View {

    protected $data = [];

    public function __set($k, $v)
    {
      $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }
    public function __isset($v)
    {
        return $this->data[$v];
    }

    public function render($template) {

        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    /**
     * @param $template
     */
    public function display($template) {

        echo $this->render($template);

    }
}
