
<?php
$classAnonymous = new class{
    public function log($message){
        return $message;
    }
};

class BankAccount{
    public function withdraw($value, $classAnonymous){
       return $classAnonymous->log("conteudo");
    }
}

$bk = new BankAccount();
print $bk->withdraw(19,$classAnonymous);
?>