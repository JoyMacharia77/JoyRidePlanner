@extends('layouts.master')


@section('title')

Edit-Registered Service Providers

@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> Edit details for registered service provider </h4>

        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <form action="/role-pregister-update/{{ $providers->id}}" method="POST">
                {{ csrf_field() }}
                {{method_field('PUT') }}

                <div class="form-group">
                  <label>Owner Name</label>
                  <input type="text" value="{{$providers->owner_name}}" class="form-control" name="owner_name" required>
                </div>

                <div class="form-group">
                  <label>Owner Email</label>
                  <input type="email" value="{{$providers->owner_email}}" class="form-control" name="owner_email">
                </div>

                <div class="form-group">
                  <label for="bs_type">Business Type:</label>
                  <select name="bs_type" id="bs_type" onchange="ChangeBsList()" value="{{$providers->bs_type}}" required>
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
                    <select name="service_type" id="service_type" value="{{$providers->service_type}}" required></select>
                  </div>
                </div>

                <div class="form-group">
                  <label>Business Name</label>
                  <input type="text" value="{{$providers->bs_name}}" class="form-control" name="bs_name">
                </div>

                <div class="form-group">
                  <label>Business Email</label>
                  <input type="email" value="{{$providers->bs_email}}" class="form-control" name="bs_email">
                </div>

                <div class="form-group">
                  <label for="country">Country:</label>
                  <select name="country" id="country" onchange="ChangeCountryList()" value="{{$providers->country}}" required>
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
                    <select name="city" id="city" value="{{$providers->city}}" required></select>
                  </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="/providers" class="btn btn-danger">Cancel</a>

              </form>

            </div>
          </div>
        </div>
      </div>
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

@endsection


@section('scripts')

@endsection