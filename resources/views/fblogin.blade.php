<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body style="background:#dfe3ee;">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6" style="background-color:	#4267B2;height: 120px;">
<img src="{{('images/logo3.png')}}" alt="" class="img1">
<img src="{{('images/facebookimg.png')}}" alt="" class="img2">
</div>
<div class="col-lg-6" style="background-color:	#4267B2;height: 120px;">

<form class="form-inline" >
    <div class="col-sm-5">
  <label class="label" for="inlineFormInputName2">Email</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="email">

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
    <label class="form-check-label" for="inlineFormCheck">
        <small> keep me sign in</small>
      
    </label>
  </div>
  </div>
  <div class="col-sm-5">
  <label class="label" for="inlineFormInputGroupUsername2">password</label>
  <div class="input-group mb-2 mr-sm-2">
    <!-- <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div> -->
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
   
  </div>
  <div>
        <a href="forgot password" style="color: white;"> <small>forgot password</small></a>
    </div>

  
</div>
<div class="col-sm-2">
  <button type="submit" class="btn btn-success mb-2">LOGIN</button>
  </div>
</form>

</div>
</div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
</body>
</html>