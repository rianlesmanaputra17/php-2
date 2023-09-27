<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/*Soal No 1
Greetings 
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh"); 
Output: "Halo Abduh, Selamat Datang di Garuda Cyber Institute!" 
*/

function greetings($str){
    echo "Hallo ".$str." Selamat Datang Di Garuda Cyber Institute!";

}
greetings("Abdul");

// Hapus komentar untuk menjalankan code!
echo "<br/>";
greetings("Bagas");
echo "<br/>";
greetings("Wahyu");
echo "<br/>";
greetings("Rian");


echo "<br>"; 

echo "<h3>Soal No 2 Reverse String</h3>";
/*Soal
No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING! 
reverseString("abdul");
Output: ludba

*/

function reverseString($str){
    for ($i=strlen($str)-1;$i>=0;$i--){
        echo $str[$i];
    }
    echo '<br/>';
    
}
reverseString("abdul");

// Hapus komentar di bawah ini untuk jalankan Code
echo"<br>"; 
reverseString("rian");
echo"<br>"; 
reverseString("Garuda Cyber Institute");
echo"<br>"; 
reverseString("We Are GC-Ins Developer");
echo"<br>"; 

echo "<h3>Soal No 3 Palindrome </h3>";
/*Soal 
No 3
Palindrome Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic. 
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false. 
NB: 
Contoh: palindrome("katak") => output : "true" 
palindrome("jambu") => output : "false" 
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2! 

*/

function palindrome($pldrome){
    $lgteks=strlen($pldrome);
    $hsteks = "";
    for ($i=$lgteks -1;$i>=0;$i--){
        $hsteks.=$pldrome[$i];
    }
    if($hsteks==$pldrome){
        echo "true <br/>";
    }else{
        echo "false <br/>";
    }
    return $hsteks;
}


palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan 
lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih 
kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama
dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” 
selain itu maka akan mereturn string “Kurang” 
*/

// Code function di sini
function tentukan_nilai($nilai){
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85){
        return "Baik";
    } elseif ($nilai >+ 60 && $nilai < 70){
        return "Cukup";
    } else {
        return "Kurang";
    }
}

$nilai1 = 90;
$nilai2 = 75;
$nilai3 = 65;
$nilai4 = 50;

echo "nilai $nilai1: " . tentukan_nilai($nilai1) . "<br>"; 
echo "nilai $nilai2: " . tentukan_nilai($nilai2) . "<br>"; 
echo "nilai $nilai3: " . tentukan_nilai($nilai3) . "<br>"; 
echo "nilai $nilai4: " . tentukan_nilai($nilai4) . "<br>"; 



?>

</body>

</html>