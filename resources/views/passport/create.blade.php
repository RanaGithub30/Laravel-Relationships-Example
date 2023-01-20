@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Passport Details</div>
                <form action="{{ route('passport.store') }}" method="post">
                    <div class="card-body">
                        @csrf
                        <label>Passport Number</label>
                        <input type="text" class="form-control" name="passport_no" />

                        <label>Passport Validity Time</label>
                        <input type="date" class="form-control" name="valid_till" />                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection