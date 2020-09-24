@extends('layouts.master')


@section('title')

Dining Services || JOYRIDE PLANNER

@endsection

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br /><br>
                <h3 align="center" style="color:orange;">REGISTERED DINING SERVICES</h3>
                <br />

                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}} </p>
                </div>
                @endif

                <div align="right">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><b>Business Name</b></th>
                                <th><b>Business Description</b></th>
                                <th><b>Business Email</b></th>
                                <th><b>Business Photo</b></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($diningsps as $rows)
                            <tr>
                                <td>{{$rows['bs_name']}}</td>
                                <td>{{$rows['bs_description']}}</td>
                                <td>{{$rows['bs_email']}}</td>
                                <td><img src="{{ asset('/diningsps/' . $rows['image'])}}" width="100px;" height="100px;" alt="image"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <script>

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

@endsection


@section('scripts')

@endsection
