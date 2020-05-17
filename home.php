<?php
require_once './database/includes/header.php';
?>

<div class="container">
<div class="row mt-4">
<div class="col-md-8 mx-auto">
<a href='add.php' class='btn btn-sm btn-primary m-3'>Ajouter<a>

<div class="card border-primary">

<div class="card-body">
<table class="table">
<thead>
<tr>
       <th>
        Titre
       </th>
       <th>
          Description
       </th>
       <th>
       Action
       </th>
</tr>
</thead>
<tbody>
<?php  $database->getNotes(); ?>
</tbody>
   </table>

   </div>
   </div>
   
   </div>
   </div>  
    </div>