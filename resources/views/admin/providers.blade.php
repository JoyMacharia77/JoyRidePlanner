@extends('layouts.master')


@section('title')

Service providers || JOYRIDE PLANNER

@endsection

@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Service Provider Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-providers" method="POST">

        {{csrf_field() }}


        <div class="modal-body">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Owner Name:</label>
            <input type="text" class="form-control" name="owner_name" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Owner Email:</label>
            <input type="email" class="form-control" name="owner_email" id="recipient-name" required>
          </div>

          <div class="form-group">

            <label for="bs_type">Business Type:</label>
            <select name="bs_type" id="bs_type" onchange="ChangeBsList()" required>
              <option value="">-- Business Type --</option>
              <option value="individualbs">Individual Business</option>
              <option value="groupbs">Group Business</option>
              <option value="accommodationbs">Accommodation Business</option>
              <option value="diningbs">Dining Business</option>
            </select>

          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <label for="service_type">Service Type:</label>
              <select name="service_type" id="service_type" required></select>
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Business Name:</label>
            <input type="text" class="form-control" name="bs_name" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Business Email:</label>
            <input type="email" class="form-control" name="bs_email" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="country">Country:</label>
            <select name="country" id="country" onchange="ChangeCountryList()" required>
              <option value="">-- Country --</option>
              <option value="kenya">Kenya</option>
              <option value="uganda">Uganda</option>
              <option value="mauritius">Mauritius</option>
              <option value="usa">USA</option>
              <option value="canada">Canada</option>
              <option value="bahamas">The Bahamas</option>
              <option value="france">France</option>
              <option value="uk">UK</option>
              <option value="netherlands">Netherlands</option>
              <option value="china">China</option>
              <option value="japan">Japan</option>
              <option value="india">India</option>
            </select>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <label for="city">City:</label>
              <select name="city" id="city" required></select>
            </div>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="recipient-name" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add S.Provider</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  var bsAndServices = {};
  bsAndServices['individualbs'] = ['Photography', 'Individual Event Organization', 'Master Of Ceremony'];
  bsAndServices['groupbs'] = ['Group Event Organization', 'Adventure Group', 'Entertainment Group'];
  bsAndServices['accommodationbs'] = ['AirBNB', 'Hotel'];
  bsAndServices['diningbs'] = ['Restaurant', 'Cafe'];

  function ChangeBsList() {
    var bsList = document.getElementById("bs_type");
    var serviceList = document.getElementById("service_type");
    var selectBs = bsList.options[bsList.selectedIndex].value;
    while (serviceList.options.length) {
      serviceList.remove(0);
    }
    var businesses = bsAndServices[selectBs];
    if (businesses) {
      var i;
      for (i = 0; i < businesses.length; i++) {
        var business = new Option(businesses[i], i.value);
        serviceList.options.add(business);
      }
    }
  }
  var countryAndCities = {};
  countryAndCities['kenya'] = ['Nairobi', 'Mombasa', 'Nakuru'];
  countryAndCities['uganda'] = ['Kampala', 'Nansana', 'Kira Town'];
  countryAndCities['mauritius'] = ['Port Louis', 'Cure Pipe', 'Grand Baie'];
  countryAndCities['usa'] = ['NewYork', 'Hawaii', 'Texas'];
  countryAndCities['canada'] = ['Ottawa', 'Toronto', 'Vancouver'];
  countryAndCities['bahamas'] = ['Nassau', 'Paradise Island', 'Atlantis Bahamas'];
  countryAndCities['france'] = ['Paris', 'Lyon', 'Nice'];
  countryAndCities['uk'] = ['London', 'Birmingham', 'Liverpool'];
  countryAndCities['netherlands'] = ['Amsterdam', 'Rotterdam', 'The Hague'];
  countryAndCities['china'] = ['Beijing', 'Shanghai', 'Hong Kong'];
  countryAndCities['japan'] = ['Tokyo', 'Osaka', 'Kyoto'];
  countryAndCities['india'] = ['New Delhi', 'Mumbai', 'Bengaluru'];

  function ChangeCountryList() {
    var countryList = document.getElementById("country");
    var cityList = document.getElementById("city");
    var selectCountry = countryList.options[countryList.selectedIndex].value;
    while (cityList.options.length) {
      cityList.remove(0);
    }
    var countries = countryAndCities[selectCountry];
    if (countries) {
      var i;
      for (i = 0; i < countries.length; i++) {
        var country = new Option(countries[i], i.value);
        cityList.options.add(country);
      }
    }
  }
</script>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Service Providers




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
              <th>Owner Name</th>
              <th>Owner Email</th>
              <th>Business Type</th>
              <th>Service Type</th>
              <th>Business Name</th>
              <th>Business Email</th>
              <th>Country</th>
              <th>City</th>
              <th>Password</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </thead>
            <tbody id="myTable">

              @foreach ($providers as $data)


              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->owner_name}}</td>
                <td>{{$data->owner_email }}</td>
                <td>{{$data->bs_type }}</td>
                <td>{{$data->service_type }}</td>
                <td>{{$data->bs_name }}</td>
                <td>{{$data->bs_email }}</td>
                <td>{{$data->country }}</td>
                <td>{{$data->city }}</td>
                <td>{{$data->password }}</td>
                <td>
                  <a href="/role-editp/{{$data->id}}" class="btn btn-success">EDIT</a>
                </td>
                <td>
                  <form action="/role-deletep/{{$data->id}}" method="post" class="delete_form">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    <script>
                      $(document).ready(function() {
                        $('.delete_form').on('submit', function() {
                          if (confirm("Are You Sure You Want To Delete It?")) {
                            return true;
                          } else {
                            return false;
                          }
                        });
                      });
                    </script>
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