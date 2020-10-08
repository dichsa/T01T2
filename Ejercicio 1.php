<?php
class libro{
    public $autor="Brandon Sanderson";
    public $añopubli="2018";
    public $editorial="Tor Books";
    public $titulo="Nacidos de la bruma";
    public $numpag="350";

    public function mostrar(){
        return $this->autor." ".$this->añopubli." ".$this->editorial." ".$this->titulo." ".$this->numpag;
    }
}
$var=new libro();
echo $var->mostrar();
?>