@extends('layout.frontend')

@section('content')

<section class="hero d-flex justify-content-center">
  <div class="background-image bg-img-cover overlay overlay-light overlay-80 page-header-light"></div>
  <div class="hero-content-area d-flex flex-column align-items-center">
    <span class="align-middle h1 title-header">Wellcome,</span>
    <span class="align-middle h5 desc-header text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
    <button class="btn btn-marketing rounded-pill btn-primary mt-2">Take a tour <i
      class='bx bx-right-arrow-alt align-middle icon-size text-white'></i></button>
    </div>
  </section>
  
  <div class="container mtt-5">
    <div class="d-flex flex-column align-items-center">
      <span class="font-weight-bold title-header h3">Gallery</span>
      <span class="desc-header desc-size">as social humans,we enjoy every happy or even sad moment together. and these are some of our photos.</span>
    </div>
    <div class="gallery-column mt-2">
      <div class="d-flex justify-content-center">
        <div class="image-1 p-2">
          <img src="https://images.unsplash.com/photo-1520262494112-9fe481d36ec3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="image_gallery">
        </div>
        <div class="image-2 p-2">
          <img src="https://images.unsplash.com/photo-1501301466131-127da9f28100?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8bmF0dXJlJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="image_gallery">
        </div>
        <div class="image-3 p-2">
          <img src="https://images.unsplash.com/photo-1493382051629-7eb03ec93ea2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bmF0dXJlJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="image_gallery">
        </div>
        <div class="image-3 p-2">
          <img src="https://images.unsplash.com/photo-1520262494112-9fe481d36ec3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="image_gallery">
        </div>
      </div>
    </div>
    <div class="gallery-column mt-2">
      <div class="d-flex justify-content-center">
        <div class="image-1 p-2">
          <img src="https://images.unsplash.com/reserve/aOcWqRTfQ12uwr3wWevA_14401305508_804b300054_o.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=876&q=80" class="image_gallery">
        </div>
        <div class="image-2 p-2">
          <img src="https://images.unsplash.com/photo-1483354483454-4cd359948304?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="image_gallery">
        </div>
      </div>
    </div>
  </div>
  
  @endsection
  