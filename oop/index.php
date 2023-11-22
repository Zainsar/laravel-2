<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    h1{
        text-align: center;
        font-style: italic;
        font-weight: 900;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
</style>
<body>
    <form action="index.php" method="post" class="form-group col-lg-6 p-3" style="margin: 0 auto 0 auto;">
    <h1>Simple Form OOP</h1>  
    <label for="Name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        <br>
        <label for="age">age</label>
        <input type="number" name="age" id="age" class="form-control">
        <br><br>
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


// inheritance


?>