<?php

namespace Exceptions;

class TestException extends \Exception
{
    protected $message = "Exemple d'exception";

    //Pour utiliser cette classe il faut faire : throw new TestException();
    //Est il faut aussi faire un try{} catch(TestException $e){
    //  echo $e->getMessage() . " sur la ligne " . $e->getLine() . " dans le fichier " . $e->getFile();    
    //}
    //Ou on peut faire un catch(\Exception) pour respecter la Loi de Substitution
}