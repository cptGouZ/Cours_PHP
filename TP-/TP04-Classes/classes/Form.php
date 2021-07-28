<?php


class Form
{
    private string $enTeteFormulaire;
    protected $corpsFormulaire=[];
    private string $piedFormulaire;
    protected $id=[];
    public function __construct() {
        $this->enTeteFormulaire = '<form action="test.php" method="post">';
        $this->enTeteFormulaire .= '<fieldset><legend>Mon Formulaire</legend>';

        $this->piedFormulaire = '</fieldset>';
        $this->piedFormulaire .= '</form>';
    }
    public function setText(string $name, string $class, string $id, string $label){
        if(array_key_exists($id, $this->id)){
            throw new Exception("Désolé mais le nom ou l'id existe déjà");
        }else{
            $this->id[$id] = $id;
            $this->corpsFormulaire[] = "<label for=\"{$id}\">{$label}</label><input type=\"text\" name=\"{$name}\" class=\"{$class}\" id=\"{$id}\"/><br>";
        }
    }

    public function setSubmit(string $name, string $class, string $id, string $label){
        if(array_key_exists($id, $this->id)){
            throw new Exception("Désolé mais le nom ou l'id existe déjà");
        }else{
            $this->id[$id] = $id;
            $this->corpsFormulaire[] = "<input type=\"submit\" name=\"{$name}\" class=\"{$class}\" id=\"{$id}\" value=\"{$label}\"><br>";
        }
    }
    /**
     * @return string
     */
    public function getForm(): string
    {
        $corps='';
        foreach ($this->corpsFormulaire as $el){
            $corps .= $el;
        }
        return $this->enTeteFormulaire . $corps . $this->piedFormulaire;
    }

}