@extends('frontend.master')

@section('content')


<div class="container mt-5">
	<h4 style="text-align: center;">Packages</h4>
  <div class="row mt-3">
          @foreach($subplans as $subplan)
          <div class="my-2 col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
            <div class="subplan" data-aos="zoom-in">
              <div class="member-img">
                <img src="{{$subplan->photo}}" class="img-fluid" alt=""> 
                <div class="my-3">
                  <p>{{$subplan->name}}</p>
                  <p>{{$subplan->price}}</p>
                  <p>{{$subplan->description}}</p>
                  <a href="#"><input type="submit" value="Get Now" class="submit-btn" data-id='id' data-name='name'  data-plan_id='plan_id' data-price='price' data-description='description'></a>
                </div>         
                <div class="social">
              </div>
          </div>            
        </div>
      </div>
          @endforeach
    </div>
</div>
@endsection