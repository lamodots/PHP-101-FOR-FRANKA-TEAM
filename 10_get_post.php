<?php 
/****GET AND POST ARE USED TP GET data from url and forms. get  will allow you to getdat from both url and form.  */

// GET
// $id = $_GET['name'];
// $age = $_GET['age'];
// echo $id;
// echo $age;
// echo var_dump( $_GET);

// hanldlig post form]
// if(isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $age = $_POST['age'];

//     $data = [
//         "myname" => $name,
//         "userAge" => $age,
//     ];

//     var_dump($data);

// }

// OR THIS

if($_SERVER['REQUEST_METHOD'] === 'POST'){

   $name = $_POST['name'];
  $age = $_POST['age'];

  echo "$name     $age";

}

?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=90&age=30">Click me</a> -->

 <!-- get for fform -->
  <br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter name"/>
</div>
<div>
    <label>age</label>
    <input type="number" name="age" placeholder="Enter age"/>
</div>

<button type="submit" name="submit" >Submit</button>

</form>