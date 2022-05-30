@extends('layouts.admin-design')

@section('content')

<body>
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Category Create</h4>
            <p class="card-description"> Okay, Let's make category for your Event ! </p>
            <form class="forms-sample" action="/admin-category-store" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="category" class="form-control" id="exampleInputName1" placeholder="Category Name">
                  </div>
                </div>  
            
                <div class="col-md-12">
                  <div class="form-group">
                    <button type="submit" class="btn-inverse-success for inverse buttons" style="margin-top:25px; float:right; padding:5px 25px;"> Submit </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection