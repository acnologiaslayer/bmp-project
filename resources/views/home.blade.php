@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#missing">Missing People</a></li>
                        <li><a data-toggle="tab" href="#sighted">Sighted</a></li>
                        <li><a data-toggle="tab" href="#questions">Questions</a></li>
                    </ul>
                </div>

                <div class="panel-body">
                    <div class="tab-content">
                        <div id="missing" class="tab-pane fade in active">
                          <h3>Missing People</h3>
                          <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                    <th>Pic</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>NID/Birth Cert.</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Area</th>
                                    <th>Missing Since</th>
                                    <th>Last Worn Clothes</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($missing as $person)
                                <tr>
                                    <td> <img src="{{asset('images/'.$person->photo)}}" alt="" style="width: 15em;"></td>
                                    <td>{{$person->name}}</td>
                                    <td>{{$person->age}}</td>
                                    <td>{{$person->gender}}</td>
                                    <td>{{$person->nid}}</td>
                                    <td>{{$person->father}}</td>
                                    <td>{{$person->mother}}</td>
                                    <td>{{$person->area}}</td>
                                    <td>{{\Carbon\Carbon::parse($person->missing_since)->toFormattedDateString()}}</td>
                                    <td>{{$person->clothes}}</td>
                                    <td>{{$person->description}}</td>
                                    <td><a class="btn btn-danger" href="/missing/delete/{{$person->id}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="sighted" class="tab-pane fade">
                      <h3>Sightings</h3>
                      <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                                <th colspan="9">Missing Person</th>
                                <th colspan="4">Informant</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Sighting Date</th>
                                <th>Sighting Time</th>
                                <th>Location</th>
                                <th>CCTV Footage</th>
                                <th>Description</th>
                                <th>Worn Clothes</th>
                                <th>Inform Police</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($seen as $person)
                            <tr> 
                                 <td>{{$person->mfname}}</td>
                                 <td>{{$person->mlname}}</td>
                                 <td>{{$person->date}}</td>
                                 <td>{{$person->time}}</td>
                                 <td>{{$person->location}}</td>
                                 <td>{{$person->cctv}}</td>
                                 <td>{{$person->description}}</td>
                                 <td>{{$person->clothes}}</td>
                                 <td>{{$person->police}}</td>
                                 <td>{{$person->sname}}</td>
                                 <td>{{$person->email}}</td>
                                 <td>{{$person->phone}}</td>
                                 <td>{{$person->address}}</td>
                                 <td><a class="btn btn-danger" href="/sighted/delete/{{$person->id}}">Delete</a></td>
                            </tr >
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div id="questions" class="tab-pane fade">
                  <h3>FAQ Questions</h3>
                  @foreach($questions as $q)
                  <h4>{{$q->id}}. {{$q->question}}</h4>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
@endsection
