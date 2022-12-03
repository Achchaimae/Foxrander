<?php

namespace HtmlElements;


class Textarea extends BaseElement implements IElmenet{
    private string $name;
    private int $rows;
    private int $cols;
    private string $text;

    public function  __construct(string $text,int $rows=5,int $cols=30,string $name="" , string $className= '',string $class_id=''){
      $this->name=$name ;
      $this->rows=$rows ;
      $this->cols=$cols ;
      $this->text=$text ;
      parent::__construct(className: $className, id: $class_id);
    }


    public function  rander(): string
    {
        // TODO: Implement rander() method.
        return "<textarea id='$this->id' class='$this->className' name='$this->name' rows='$this->rows' cols='$this->cols'>
          $this->text
        </textarea>";
    }




}
