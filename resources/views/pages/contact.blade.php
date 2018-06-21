@extends("layouts.default")
@section('content')
    <br>
    <h1>Contact</h1>
    <p class="lead">Please use this form to contact the site owner.</p>

 <!--   <form action="/contact" method="post" action="{{route('contact.store')}}> -->

    <form role ="form" id="contact-form" class="contact-form" method="post" action="{{route('contact.store')}}">
        {{csrf_field()}}
        <div class="form-group">
       <!--     <label for="email">Email address</label> -->
      <!--      <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com"> -->
            <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
        </div>

    <div class="form-group">
      <!--  <label for="email">Email address</label> -->
        <!--      <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com"> -->
        <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
    </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>

 <!--  <form role ="form" id="contact-form" class="contact-form" method="post" action="{{route('contact.store')}}">
       {{csrf_field()}}
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <!--  <label for="email">Email address</label> -->
   <!--                <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
               </div>
           </div>

           <div class="col-md-6">
               <div class="form-group">
                   <!--  <label for="email">Email address</label> -->
    <!--               <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
               </div>
           </div>
       </div>

       <div class="row">
           <div class="col-md-12">
               <div class="form-group">
                   <!--  <label for="email">Email address</label> -->
     <!--              <textarea  class="form-control-textarea" rows="3" name="message"  id="message" placeholder="Message"></textarea>
               </div>
           </div>
       </div>

       <div class="row">
           <div clss="col-md-12">
               <button type="submit" class="btn main-btn pull-right">Send a message</button>
           </div>
       </div>

@endsection