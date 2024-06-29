@extends('layouts.main')
@section('container')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="css/style.contact.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

<div class="image-contact-banner" style="margin-top:70px">
  <div class="container">
    <div style="text-align: center;">
      <h1 class="lg-text">CONTACT</h1>
    </div>
  </div>
</div>

<div class="animation">
<div class="contact-background">
  <div class="container">
    <div class="clearfix">
      <div class="contact-container-left">
        <div>
          <h2>Get In Touch With Us</h2>
        </div>
        <div>
          <h4>Contact Info</h4>
          <p>PT. FAR Coco Indonesia</p>
        </div>
        <div>
          <h4>Email:</h4>
          <p>Lorem Ipsum</p>
        </div>
        <div>
          <h4>Phone:</h4>
          <p>+6281329794672</p>
        </div>
        <div>
          <h4>Address:</h4>
          <p>Jl. Fitrianoor, Simpang Empat. Batulicin, South Kalimantan</p>
        </div>
      </div>
      <div class="contact-container-center">
        @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
          {{Session::get('message_sent')}}
        </div>
        @endif
        <form action="{{route('contact.send')}}" method="post" enctype="multipart/form-data">
          @csrf
          <h2>Send Us A Message</h2>
          <th>
          <td><input type="text" placeholder="First Name" name="first"></td>
          <td><input type="text" placeholder="Last Name" name="last"></td>
          </th>
          <th>
          <td><input type="email" placeholder="Email Address" name="email"></td>
          <td><input type="text" placeholder="Subject" name="subject"></td>
          </th>
          <th>
          <td><textarea type="paragraph" placeholder="Write Your Message" name="message" id="" cols="30" rows="5"></textarea></td>
          </th>
          <th>
          <td><input type="submit" name="send" value="Send Message"></td>
          </th>
        </form>
      </div>
      <div class="contact-container-right">
        <div>
          <h2>Operational</h2>
        </div>
        <div>
          <p>Monday - Saturday: 8 AM - 4 PM<br>Sunday: Closed</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="map-container-1">
  <div id="map-container-google-1" class="z-depth-1-half map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.698571391619!2d116.00603911484384!3d-3.4234028975081943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de8b5c7d5ccbb41%3A0x69dc72c9432a5d9f!2sJl.%20Fitrianoor%2C%20Simpang%20Empat%2C%20Kabupaten%20Tanah%20Bumbu%2C%20Kalimantan%20Selatan%2072211!5e0!3m2!1sid!2sid!4v1637338702909!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
  </div>
</div>
</div>

  @endsection