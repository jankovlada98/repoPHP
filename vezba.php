<html>
<head>
    <title>PHP</title>
</head>
<body>
<h1>TAKO JE BRE</h1>
<?php
    echo "Moj prvi php kod";
    echo "<br>";
    $v=30;
    $j=4;
    function zbir(int $x, int $y){
        return $x+$y;
    }
    echo "Zbir dva broja je: ".zbir($v,$j)."<br>";
    echo "CAO<br>";
    if ($j>$v){
        echo "Veci je";
    }else
        echo "Nije veci";
    echo "<br>";
    do{
        echo "Izvucen je broj $j<br>";
        $j++;
    }while($j>=4 && $j<10);
    echo "<br>";
    for ($i=1;$i<=10;$i++){
        if ($i==5)
            break;
        echo "Broj: $i<br>";
    }
    $voce=["jabuka","tresnja","visnja","kruska"];
    echo "Kuci ima mnogo $voce[0]<br>";
    $godine=array(43,52,65,2,14,75,3,97);
    echo "Niz:<br>";
    for ($i=0;$i<count($godine);$i++){
        echo $godine[$i];
        echo "<br>";
    }
    sort($godine);
    echo "Sortiran niz:<br>";
    for ($i=0;$i<count($godine);$i++){
        echo $godine[$i];
        echo "<br>";
    }
    echo "<br>";
    class Osoba{
        public $ime;
        public $brgpd;

        function __construct($ime, $brgpd){
            $this->ime=$ime;
            $this->brgpd=$brgpd;
        }

        function get_ime(){
            return $this->ime;
        }

        function get_brgof(){
            return $this->brgpd;
        }
    }

    $janko=new Osoba("Vladimir",23);
    echo $janko->get_ime()." ima ".$janko->get_brgof()." godine.<br>";
    if($janko->get_brgof()>18)
        echo $janko->get_ime()." je punoletan.<br>";
    else
        echo $janko->get_ime()." je maloletan.<br>";


    echo $_SERVER["PHP_SELF"];
?>
<br><br>
<form action="nova.php" method="post">
    Ime: <input type="text" name="ime"><br>
    Prezime: <input type="text" name="prezime"><br>
    Email: <input type="email" name="imejl"><br>
    Telefon: <input type="text" name="telefon"><br>
    Pol: <input type="radio" name="pol" value="musko">musko
    <input type="radio" name="pol" value="zensko">zensko
    <br>
    <button>Klikni me</button>
</form>
<?php
/*
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["ime"];
        $email=$_POST["imejl"];
        echo "Welcome $name<br>";
        echo "Your email is: $email";
    }
*/
?>
</body>
</html>