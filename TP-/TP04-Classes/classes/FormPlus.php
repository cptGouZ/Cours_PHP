<?php


class FormPlus extends Form
{
    public function setRadio(string $name, string $class, string $id, string $label){
        if(array_key_exists($id, $this->id)){
            throw new Exception("Désolé mais le nom ou l'id existe déjà");
        }else{
            $this->id[$id] = $id;
            $this->corpsFormulaire[] = "<label for=\"{$id}\">{$label}</label><input type=\"radio\" name=\"{$name}\" class=\"{$class}\" id=\"{$id}\"><br>";
        }
    }
}