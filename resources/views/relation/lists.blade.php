@extends('layouts.app')
@section('content')

<div class="container">

<center><h2>Basic Relationships</h2></center>

<div id="rel1">
  
    <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="{{ route('passport.show') }}" target="_blank">One to One Relationship</a>
            </h3>
         </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="{{ route('category.index') }}" target="_blank">One to Many Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">One to Many (Inverse) Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Many to Many Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>

</div>

<div id="rel1">
  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Has One of Many Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Has One of Through Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Has Many of Through Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>


</div>


<center><h2>Polymorphic Relationships</h2></center>

<div id="rel1">
<div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">One to One Relationship</a>
            </h3>
         </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">One to Many Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Many to Many Relationship</a>
        </h3>
        </div>
        </div>
    </div>
  </div>
</div>

<center><h2>Dynamic Relationships</h2></center>

<div id="rel1">
<div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Dynamic Relationship</a>
            </h3>
         </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-center">    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>
            <a href="#" target="_blank">Dynamic Relationship Notes</a>
            </h3>
         </div>
        </div>
    </div>
  </div>
</div>

</div>





</div>

@endsection