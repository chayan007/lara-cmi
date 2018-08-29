<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm|md|lg|-xl navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Home</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<form method="POST" action="add" enctype="multipart/form-data">
    @csrf
<div class="form-group">
  <label for="">Product Name</label>
  <input type="text" name="product" id="" class="form-control" placeholder="Name of Product" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Name of the Product</small>
</div>
<div class="form-group">
  <label for="">Company Manufacturer</label>
  <input type="text" name="company" id="" class="form-control" placeholder="Manufacturer Name" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Company who manufactured the product ?</small>
</div>
<div class="form-group">
  <label for="">Product Description</label>
  <textarea name="description" id="" class="form-control" placeholder="Describe the Product" aria-describedby="helpId"></textarea>
</div>
<strong>Category</strong>
<div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="category" id="" value="ultrasound" checked>
    Ultrasound<br>
     <input type="radio" class="form-check-input" name="category" id="" value="xray" checked>
    XRay<br>
     <input type="radio" class="form-check-input" name="category" id="" value="furniture" checked>
    Furniture<br>
     <input type="radio" class="form-check-input" name="category" id="" value="consumables" checked>
    Consumables<br>
    <input type="radio" class="form-check-input" name="category" id="" value="accessories" checked>
    Accessories<br>
    <input type="radio" class="form-check-input" name="category" id="" value="veterinary" checked>
    Veterinary Ultrasound<br>
    <input type="radio" class="form-check-input" name="category" id="" value="gas" checked>
    Gas Pipeline<br>
  </label><br>
</div>
<div class="form-group">
  <label for="">Product Image  </label>
  <input type="file" name="image" id="" class="form-control" placeholder="Select one Image" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Add only one Image</small>
</div>
<div class="form-group">
  <label for="">Product PDF/DOC  </label>
  <input type="file" name="doc" id="" class="form-control" placeholder="Select one Document" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Add documentation of your product</small>
</div>
<button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
