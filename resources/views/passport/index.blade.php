@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($passport_details as $category)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>{{ $category->passport_no }}</h3></div>
            <div class="card-text">
                Created By: <b>{{ $category->user->name }}</b><br />
                Valid Till: <b>{{ $category->valid_till}}</b><br />
                Created At: {{ $category->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection