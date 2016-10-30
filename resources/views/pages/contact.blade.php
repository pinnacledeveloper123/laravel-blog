@extends('main') 

@section('title', '| Contact') 

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <hr>

      <form>
        <div class="form-group">
          <label for="subject">Subject:</label>
          <input type="text" class="form-control" id="subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" id="message">Type your message here...</textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Send Message">
      </form>

    </div>

  </div> <!-- row -->

@endsection