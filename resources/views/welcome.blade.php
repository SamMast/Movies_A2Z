@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">List of Favorite Movies</div>

                    @if(Auth::check())
                      <!-- Table -->
                      <table class="table">
                          <tr>
                              <th>Movie</th>
                              <th class="releaseYear">Release Year</th>
                              <th class="yearsSince">Years Since Release</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                              <td>{{ $key }}</td>
                              <td class="releaseYear">{{ $value }}</td>
                              <td class="yearsSince">( {{ 2018 - $value }} years )</td>
                            </tr>
                          @endforeach
                      </table>
                      <hr />
                      <a href="/json" class="btn btn-info">JSON view </a>
                    @endif


            </div>
            @if(Auth::guest())
              <br />
              <a href="/login" class="btn btn-info"> You need to login to view the list<br />Click Here</a>
            @endif
        </div>
    </div>
</div>
@endsection