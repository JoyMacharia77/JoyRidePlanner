

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Destinations Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form action="/save-destinations" method="POST">
<form>
{{csrf_field() }}


      <div class="modal-body">
        <!--
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Continent:</label>
            <input type="text" class="form-control" name="continent" id="recipient-name">

            

          </div>

          -->
          <div class="form-group">
          <label >Continent:</label>
          <select name="continent" class="form-control">
    <option value="Africa">Africa</option>
    <option value="N.America">N.America</option>
    <option value="Europe">Europe</option>
    <option value="Asia">Asia</option>
    </select>
    </div>



          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Country:</label>
            <input type="text" name="country" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">City:</label>
            <input type="text" name="city" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Currency:</label>
            <input type="text" name="currency" class="form-control" id="recipient-name"></textarea>
          </div>


          <div class="form-group">
          <label >Category:</label>
          <select name="category" class="form-control">
    <option value="local">Local Travel</option>
    <option value="long">Long Distance</option>
    <option value="international">Internaional Travel</option>
    
    </select>
    </div>

    <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <input type="text" name="description" class="form-control" id="recipient-name"></textarea>
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Picture:</label>
            <input type="file" name="picture" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Destination</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Travel Destinations
                
                
                
                
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>ID</th>
                        <th>Continent</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Currency</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
</thead>
<tbody>



@foreach ($destinations as $data)


    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->continent}}</td>
        <td>{{$data->country }}</td>
        <td>{{$data->city }}</td>
        <td>{{$data->currency}}</td>
        <td>{{$data->category}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->picture}}</td>


        
        <td>
        <a href ="/role-editd/{{$data->id}}" class="btn btn-success">EDIT</a>
        </td>

        <td>
        <form action="/role-deleted/{{$data->id}}" method="post">
       {{ csrf_field() }}
       {{ method_field('DELETE')}}
        <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection


@section('scripts')

@endsection