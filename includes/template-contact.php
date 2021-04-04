<?PHP 
/*Template Name:contact
*/

?>

<!DOCTYPE html>
<html>

<head>
    <title>Mental Health-contact</title>
     <link rel="stylesheet" href="index.css">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="icon" href="img/icons8-coeur-en-bonne-santé-50.png" type="image/gif" sizes="100x140">

<style>
.contenu{
margin-left: 20%;
margin-right: 20%;
margin-top: 10%;
border-radius: 27px;
-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, inset 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, inset 5px 5px 15px 5px rgba(0,0,0,0);
padding: 7%;

}

</style>
<?PHP get_header('secondary');?>
<h1 style=" font-size: 50pt;
          margin-top: 5%;
          margin-left: 35%;
    color: #bde1e8;
    font-family: 'Pacifico', cursive;
    " >Contact</h1>
    
      </div>

<div class="contenu">
 

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxx">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Prenom</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxx">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">comment</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><button  type="button" class="btn btn-outline-secondary">Send</button>
</div>

</div>
<?PHP get_footer();?>