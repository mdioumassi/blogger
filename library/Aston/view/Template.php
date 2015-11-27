<?php

namespace Aston\View;

class Template
{
    private $filename;
    
    public function __construct($filename)
    {
       $this->setFilename($filename) ;
    }
    
    public function render()
    {
        ob_start();
        include $this->getFilename();
        $content = ob_get_clean();
        
        return $content;
    }

    public function setFilename($filename)
    {
          $this->filename =(string)$filename;
          return $this;
    }
    
    public function getFilename()
    {
        return $this->filename;
    }
}
