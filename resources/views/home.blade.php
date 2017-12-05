@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h3>Missing People</h3>
                    {{$missing}}
                    <h3>Sighted People</h3>
                    {{$seen}}
                    <h3>FAQ Questions</h3>
                    {{$questions}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
