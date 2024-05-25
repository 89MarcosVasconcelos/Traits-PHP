<?php
trait MyTrait{
    public function hello(){
        return "Hello word";
    }
}

trait MyTrait2{
    public function hello(){
        return "Hello word 2";
    }
    
    public function showName($name){
        return "Hello ".$name;
    }
}

//for use two traits with methods with same name
class Client{
    use MyTrait, MyTrait2{
        //escolhe de onde usar o metodo com o mesmo nome
        MyTrait2::hello insteadof MyTrait;
        //da um novo nome ao metodo para poder usar o dois ao mesmo tempo
        Mytrait2::hello as helloMy;
        //mudando a visibilidade e o nome
        MyTrait::hello as private helloVisibilityChanged;
    }
    //funcao usada para usar o novo metodo
    public function test(){
        return $this->helloVisibilityChanged();
    }
}

$c = new Client();
print $c->test();
print"<br />";
print $c->helloMy();
print"<br />";

print $c->showName("Marcos");

?>