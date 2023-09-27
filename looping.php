<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Looping</title>
</head>
<body>
<h1>Berlatih Looping</h1>
<?php
echo "<h3>Soal No 1 Looping I Love PHP</h3>";
//Looping I Love PHP
echo "<h3>Looping Pertama</h3>";
for($i=1; $i<=10;$i++){
    $out = $i*2;
    echo "$out- I Love PHP";
    echo "<br/>";
}

echo "<h3>Looping Kedua</h3>";
for($i=10; $i>=1;$i--){
    $out = $i*2;
    echo "$out- I Love PHP";
    echo "<br/>";
}

//Lakukan Looping Di Sini 
echo "<h3>Soal No 2 Looping Array Modulo </h3>";
/*

*/
//Soal No 2
//Looping Array Module Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut. Tampung ke dalam array baru bernama $rest
$numbers = [18, 45, 29, 61, 47, 34]; 
echo "Array Numbers:";
echo "<br/>";
print_r($numbers);
echo "<br/>";
$rest=[];
foreach($numbers as $numbers){
    $sisabagi=$numbers %5;
    $rest[] = $sisabagi;
    //print_r($rest);
}

echo "<br/>";
echo "Array Sisa Baginya Adalah:";
echo "<br/>";
print_r($rest);
echo "<br/>";
 

// Lakukan Looping

// Lakukan Looping di sini echo "<br>"; echo "Array sisa baginya adalah: "; echo "<br>";

echo "<h3> Soal No 3 Looping Asociative Array </h3>";

$items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    
];
    $items = array(
        array(
            "id" => "001",
            "name" => "Keyboard Logitek",
            "price" => 60000,
            "description" => "Keyboard yang mantap untuk kantoran",
            "source" => "logitek.jpeg"
        ),
        array(
            "id" => "002",
            "name" => "Keyboard MSI",
            "price" => 300000,
            "description" => "Keyboard gaming MSI mekanik",
            "source" => "msi.jpeg"
        ),
        array(
            "id" => "003",
            "name" => "Mouse Genius",
            "price" => 50000,
            "description" => "Mouse Genius biar lebih pinter",
            "source" => "genius.jpeg"
        ),
        array(
            "id" => "004",
            "name" => "Mouse Jerry",
            "price" => 30000,
            "description" => "Mouse yang disukai kucing",
            "source" => "jerry.jpeg"
        )
    );

    foreach ($items as $item){
        print_r($item);
        echo "<br>";
    }

  


echo "<h3> Soal No 4 Asterix </h3>";
/*
//Soal No 4 Asterix 5x5
//Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
Output: 
*
* *
* * *
* * * *
* * * * * 
*/
echo "Asterix: "; 
echo "<br/>";
for($i=1;$i<=5;$i++){
    for($j = 1; $j <= $i; $j++){
        echo "* ";
    }
    echo "<br/>";
}

?>
</body>
</html> 