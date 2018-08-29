<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Products | Core Medical </title>
</head>
<body>
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId">
    <li class="nav-item">
        <a href="#tab1Id" class="nav-link active">Products</a>
    </li>
    <li class="nav-item">
        <a href="/" class="nav-link disabled">Home</a>
    </li>
</ul>
<div class="container">
    <div class="jumbotron jumbotron-fluid" style="padding:20px; border:darkblue 10px;">
  <div class="container">
    <h1 class="display-4">Search for Products</h1>
    <div class="form-group">
    <div class="form-group">
      <input type="text" class="form-control" name="" id="myInput" aria-describedby="helpId" placeholder="Product or Company">
      <small id="helpId" class="form-text text-muted">Enter anything you want to search</small>
    </div>
  </div>
</div>
    <div class="row">
        <div class="card-columns" id="card-columns">
            @foreach ($posts as $post)
            <div class="card" style="max-height:500px; overflow:hidden">
                <img class="card-img-top" src="{{ Storage::url($post->img_url) }}" alt="" height="300px" width="200px">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->product }}</h3>
                    <h5 class="card-text">{{ $post->company }}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="{{ Storage::url($post->doc_url) }}"><button type="button" class="btn btn-primary">Download Brochure</button></a>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modelId">Get Price</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                                <h4 class="modal-title" id="modelTitleId">Get Price for <strong>{{$post->product}}</strong> by {{$post->company}}</h4>
                            </div>
                            <div class="modal-body">
                               <form action="/contact" method="POST">
                                   @csrf
                                   <div class="form-group">
                                     <label for="">Name</label>
                                     <input type="text" name="contact_name" id="" class="form-control" placeholder="Enter your Name" aria-describedby="helpId">
                                   </div>
                                   <div class="form-group">
                                     <label for="">Number</label>
                                     <input type="number" name="contact_number" id="" class="form-control" placeholder="Enter your Phone No." aria-describedby="helpId">
                                   </div>
                                   <div class="form-group">
                                     <label for="">Email ID</label>
                                     <input type="email" name="contact_email" id="" class="form-control" placeholder="Enter your eMail ID" aria-describedby="helpId">
                                   </div>
                                     <input type="hidden" name="customer_product" id="" class="form-control" value="{{ $post->product }}" aria-describedby="helpId">
                                   </div>
                                    <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Submit"></button>
                            </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#card-columns *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
