@extends('layouts.admin-design')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          	<div class="row">
            	<div class="col-md-6">
	            	<h4 class="card-title">Event List</h4>
	              <p class="card-description"> Here's All Your Event </p>
            	</div>
              <div class="col-md-6" style="float:right;">
                <a href="/admin-category-create" class="btn btn-secondary btn-fw" style="margin:0 0 20px 0; float:right;">Create New Category</a>
              </div>
          	</div>
						<div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Category </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($category as $c)
                  <tr>
                    <td>{{ $c->category_name }}</td>
                    <td>
                      <a href="/admin-category-delete/{{ $c->id }}" class="btn-danger btn-fw" style="padding:5px 15px;border-radius:20px;">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection