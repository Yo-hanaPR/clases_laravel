@props(['title','type'])

@php 

    switch($type){
        case 'danger':
            $class="alert alert-danger";
            break;
        
        case 'info':
            $class="alert alert-info";
            break;
    }

@endphp 

<div class="container">
    <div class="mb-4 {{$class}}">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h1>{{$slot}}</h1>
                {{$secundario}}
            </div>
        </div>
    </div>
</div>