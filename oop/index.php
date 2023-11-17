<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name">
        <input type="number" name="age" id="age">
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>

<?php

class aqsa{
     public $name , $age;
     public function __construct($n , $a){
        $this->name = $n; 
        $this->age = $a;
        echo "name : $this->name and age: $this->age <br>";
}
//      public function std2(){
//         echo "zain";
// }
}
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $age = $_POST['age'];


$obj = new aqsa("Zain" , "21");
$obj = new aqsa("Aqsa Abdul Jabbar" , "18");
// $obj->name = $name;
// $obj->age = $age;
// $obj->std();
}


?>