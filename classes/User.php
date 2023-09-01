<?php 

class User{

// questa è la defizione della mia classe 1)ATTRIBUTI
public $firstName;
public $lastName;
public $email;
// posso creare delle proprietà che hanno degli attributi di default $active = true : RESTITUIRA' BOOLEAN TRUE
private $active;
public $address;
public static $species = 'essere umano';

// in php se non passiamo gli argomenti ce lo segnala
//questa è la valorizzazione 2)COSTRUTTORE
//STIAMO ANDANDO A SOVRASCRIVERE LA DEFIZIONE ORIGINALE 
public function __construct(
    $firstName,
    $lastName = null ,
    $email = null , 
    $active = true ,
    // possiamo dire alla funzione di che tipo sia l'argomento che dovrà ricevere
    Address $address = null
)
{
    echo 'Sto creando un nuovo oggetto di tipo user<br>';
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->setActive($active);
    $this->address = $address ;
    // per accedere dentro alla classe species
    var_dump(self::$species);
}


// 3)METODI
public function getFullName()
{
    // quando vogliamo accedere alle proprietà non dobbiamo usare il dollaro
    return $this->firstName.' '.$this->lastName;
}

// quando abbiamo attributi a private usiamo due funzioni
// in caso di active avremo due funzione
// questo è a tutti gli effetti un controllo di sicurezza 
public function getActive()
{
    return $this->active;
}
/*
    Setter dell'attributo active
    Mi aspetto che il parametro $active sia un booleno 
    Se non e un boolenao , non faccio niente
*/
public function setActive($active)
{
    if(is_bool($active)){
        $this->active = $active;
    }
}

}