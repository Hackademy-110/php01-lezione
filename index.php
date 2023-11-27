<?php
//!linguaggio a runtime = tempo di esecuzione
//! HYPER TEXT PREPROCESSOR , personal home page
// let x = 5;
// console.log(y);
// console.log(x);
//? SESSIONE - momento da quando l'utente si è connesso e ha fatto determinate operazioni
// ? cookies tecnici 
//? hashing per le password 
//? form e gestione dati 

//! TAG DI APERTURA E CHIUSURA
//! <?php



//! VARIABILI 
//differenza SCOPE: variabili hanno scope locale mentre le costanti globali

//?  let nomevariabile = valore;
// regole nomi variabili: $, alfanumerici o _, inizia con lettere o _, CASE SENSITIVE
$nomeVariabile = "valore";

//! COSTANTI - keyword const + NOMEMAIUSCOLO
const NAME = "Rosalinda";

// int num = 5;
// boolean bool = true;

//! tipizzazione debole
$name = "Annalisa"; //$name è una stringa
// echo $name;
$name = "Alessandro"; //$name è un intero
// echo $name ;
// $topolino = true;

$int = 5; // integer , numeri positivi e negativi
$float = 2.5; // numeri con la virgola
$bool = true; //true o false
$string = "ciao a tutti!"; // sequenze di caratteri alfanumerici, speciali o stringa vuota
$string2 = 'ciao';


// "\n" per andare a capo
'Ciao a tutti, mi chiamo $name\n' . "\n";

"Ciao a tutti, mi chiamo $name\n"; //VARIABLE INTERPOLATION 
//concatenazione con . 
// echo 'ciao' . 'a tutti';
// \ escape character 
// echo 'ci vediamo all\'ora di pranzo';

//PER STAMPARE IL TIPO DI DATO E IL DATO VAR_DUMP
// var_dump($string);
// var_dump($int);

//! TYPE COERCION - trasformazione del tipo di dato

$x = 10;
$y = "5ciao"; //numeric string
// echo $x + $y;

//! TIPI DI DATO STRUTTURATO, COMPOSTI o USER-DEFINED 
// oggetti
//! ARRAY 
//indici che partono da 0
$array = [1, 2, 3, true, 'ciao', [6, 7, 8]];
// $arr = array(1,2,3, true, 'ciao');
// var_dump($array);
// echo $array[2];
// print_r($array);

// echo $array[5][1];
//! ARRAY ASSOCIATIVI, chiave-valore
$annalisa = [
    'name' => 'Annalisa', 'surname' => 'Caldarulo', 'age' => 25, 'Roberto'
];
// var_dump($annalisa);
// print_r($annalisa);
// echo $annalisa[0];

//! OPERATORI 
//! MATEMATICI restituiscono un valore numerico
// + - % / * ** 
4 + 5; //output: 9
//! DI CONFRONTO restituiscono un BOOLEANO

5 == "5"; //true se il valore è lo stesso
5 === "5"; // true se il valore E il tipo di dato è lo stesso 
// >, <, <=, >=,  !=, !==

//! LOGICI restituiscono un  booleano

// truthy - non è null, è quantificabile (stringhe non vuote, array non vuoti, true)
// falsy - valore null o non quantificabile 
$num = 5;
$string7 = '';
// var_dump((bool) $num);
// var_dump((bool) $string7);

// && - true se entrambi sono TRUTHY
// var_dump($num && true);

// || - true se almeno uno è truthy, false se entrambi sono false
// var_dump($string7 || false);

// bang operator ! - restituisce il contrario
// var_dump(!true);

//! ALGORITMO = insieme di comandi eseguiti in un ordine (sequenza) per risolvere un problema
//Teorema di Bohm e Jacopini - qualunque algoritmo può esszere implementato utilizzando 3 strutture: sequenza, selezione e ciclo, da applicare ricorsivamente.

//! SEQUENZA
$n = 1;
$n2 = 2;
$sum = $n + $n2;

//! SELEZIONE
// COMANDI DI SELEZIONE

$vote = 30;
// if ($vote == 30) {
//     echo "Promosso con lode! \n";
// } elseif ($vote >= 18 && $vote < 30) {
//     echo "Promosso!\n";
// } else {
//     echo "Riprova la prossima volta \n";
// }

$v = -5;
// switch ($v) {
//     case $v == 100:
//         echo "lode \n";
//         break;
//     case $v > 60 && $v < 100:
//         echo "Promosso! \n";
//     case $v == 60:
//         echo "Promosso ma puoi fare di meglio! \n";
//         break;
//     case $v > 0 && $v < 60:
//         echo "Bocciato! \n";
//         break;
//     default:
//         echo "valore non valido \n";
//         break;
// }

//! ITERAZIONE O CICLO

//! FOR
// contatore, condizione, incremento
for ($i = 0; $i < 10; $i++) {
    echo "$i \n";
}
$students = ['Davide', 'Roberto', 'Alessandra', 'Ruggiero'];
// echo "numero elementi dell'array students: " . count($students) . "\n";

//CICLO FOR CON GLI ARRAY
for ($i = 0; $i < count($students); $i++) {
    echo $students[$i] . "\n";
}

//! FOREACH - FARE LA STESSA OPERAZIONE SU TUTTI GLI ELEMENTI DI UN ARRAY
//SINTASSI DEL FOREACH IN PHP   
//  foreach($nomeARRAY as $elemento){
//  istruzioni da ripetere su ogni $elemento
//  } 
//arr.forEach(el => console.log(el))

foreach ($students as $key => $student) {
    //1 $student = 'Roberto';
    echo "l'elemento " . $student . " ha come chiave " . $key . "\n";
}


//! WHILE
$i = 4;

while ($i < 5) {
    echo "$i \n";
    $i++;
}

//! DO WHILE

// $i = 6;
do {
    echo "$i \n";
    $i++;
} while ($i <= 5);
