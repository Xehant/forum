<!DOCTYPE html>
<html lang="en">
<?php
include "includes/head.php";
?>
<body>
   <form class="container" method="POST">
   <div class="mb-3"> 
    <label class="form-label" for="exampleInputEmail1">Pseudo</label>
        <input type="text" class="form-control" name="pseudo">
       
    </div>
    <div class="mb-3">
    <label class="form-label" for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="mb-3">
    <label class="form-label" for="exampleInputEmail1">Prénom</label>
        <input type="text" class="form-control" name="firstname">
    </div>
    <div class="mb-3">
        <label class="form-check-label" for="examplePassword1">Password</label>
           <input type="password" class="form-control" name="password">
         </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
   </form> 
</body>
</html>