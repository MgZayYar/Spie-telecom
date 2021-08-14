@extends('frontend.master')

@section('content')
<h4 style="text-align: center; color: white;" class="mt-5">Blogs</h4>

<div class="container mt-5">
  <p style="text-align: justify; font-size: 20px;">Visit us for more knowledge~!</p>
      <div class="row mt-5">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/0YVPiFy7cuo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/hzlzd5I7v3A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/r2qkBsDt2K0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
      </div>

      <div class="row mt-5">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/5wPOp5nSVDo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/Bu7ZHWdgfHg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/DmUWG3gmpd4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
      </div>

      <h4 style="text-align: center; color: white;" class="mt-5">Our Memories</h4>

      <div class="row mt-5">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="memorycard">
               <img src="{{asset('frontendtemplate/images/b1.jpg')}}" width="100%" height="300px" alt="image" class="img-reponsive img-border">
            </div>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="memorycard">
               <img src="{{asset('frontendtemplate/images/b2.jpg')}}" width="100%" height="300px" alt="image" class="img-reponsive img-border">
            </div>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="memorycard">
               <img src="{{asset('frontendtemplate/images/b3.jpg')}}" width="100%" height="300px" alt="image" class="img-reponsive img-border">
            </div>
         </div>
      </div>

      <div class="row mt-5">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="memorycard">
               <img src="{{asset('frontendtemplate/images/b4.jpg')}}" width="100%" height="300px" alt="image" class="img-reponsive img-border">
            </div>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="memorycard">
               <img src="{{asset('frontendtemplate/images/b5.jpg')}}" width="100%" height="300px" alt="image" class="img-reponsive img-border">
            </div>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="memorycard">
               <img src="{{asset('frontendtemplate/images/b6.jpg')}}" width="100%" height="300px" alt="image" class="img-reponsive img-border">
            </div>
         </div>
      </div>
    </div>
@endsection