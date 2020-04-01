@extends('layouts.app')

@section('content')
    <div class="col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-3">
        <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
           <ul class="list-group list-group-flush">
                @foreach($companies as $company)
                    <li class="list-group-item">{{ $company->name }}</li>
                @endforeach   
            </ul>
        </div>
        </div>
    </div>    
@endsection