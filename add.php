

<?php
require_once './database/includes/header.php';
if(isset($_POST['submit'])){
   $data['name']= $_POST['title'];
   $data['description'] = $_POST['description'];
   $database->add($data);
}
?>

<div class="container">
<div class="row mt-4">
<div class="col-md-8 mx-auto">
<div class="card border-primary">

<div class="card-body">
<form method="post" >
  <div class="form-group">
    <label for="">Titre*</label>
    <input type="text" class="form-control" name="title" placeholder="entrer le titre du note" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description*</label>
    <textarea  rows="" cols="30" class="form-control" placeholder="entre la description" name="description" required> </textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Valider</button>
</form>
   </div>
   </div>
   
   </div>
   </div>  
    </div>