<!-- Crea un diagramma per una tabella di db che
rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella
tabella, e usala per stampare in pagina i dati di
alcuni Users.
Il database e la tabella non devono essere
realmente creati.
BONUS: utilizzare extends, traits per estendere la nostra classe principale, come visto durante la lezione del mattino. -->

<?php

class User {
    private $id;
    private $nome;
    private $cognome;
    public $nascita;
    private $email;
    public $sesso;
    public $nickname;

}

$blogger = new User();

$blogger->nickname = 'pimpa76';
$blogger->sesso = 'm';
$blogger->nascita = '13.04.1976';

echo "<h1>blogger</h1>";
echo $blogger->nickname;
echo '<br>';
echo $blogger->sesso;
echo '<br>';
echo $blogger->nascita;


?>