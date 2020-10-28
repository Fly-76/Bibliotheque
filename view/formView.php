<?php

class Form {
    protected $html;

    public function __construct(string $action="", string $method="POST", string $style='') {
        $this->html = "<form class='" . $style . "' action='" . $action . "' method='" . $method . "'>";
    }

    public function setText(string $reference, string $text){
        $this->html .= "<div class='form-group row'>" 
        . "<label for='" . $reference . "' class='col-sm-2 col-form-label'>" . $text . "</label>"
        . "<div class='col-sm-10'><input type='text' class='form-control' name='". $reference . "' id='". $reference . "'/></div></div>";
    }

    public function setArea(string $reference, string $text){
        $this->html .= "<div class='form-group'>" 
        . "<label for='" . $reference . "'>" . $text . "</label>"
        . "<textarea class='form-control' id='". $reference . "' rows='3'></textarea></div>";
    }

    public function setSubmit(string $name, string $text){
        $this->html .= "<input type='submit' class='btn btn-warning' name='" . $name ."' value='" . $text ."'>";
    }

    public function showForm(){
        echo $this->html . "</form>";
    }
}
