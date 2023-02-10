@extends('layouts.template')
@section('title','Welcome')
@section('content')

@include('layouts.header')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right;">
  Create Student
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-xl-12">
               <form method="post" action="/student-save" id="student_form">
                @csrf
                   <div class="form-group">
                       <label>Name : </label>
                       <input type="text" name="name" class="form-control">
                       <span class="error name_err"></span>
                   </div>
                   <div class="form-group">
                       <label>Email : </label>
                       <input type="text" name="email" class="form-control">
                       <span class="error email_err"></span>
                   </div>
                   <div class="form-group">
                       <label>Mobile : </label>
                       <input type="text" name="mobile" class="form-control">
                       <span class="error mobile_err"></span>
                   </div>
                   <input type="submit" value="Save" class="btn btn-info">
               </form>
           </div>
       </div>
      </div>
      

      
    </div>
  </div>
</div>

<script src="{{asset('/upload/custom.js')}}"></script>

<!-- <script>
    $('#exampleModal').modal('show')
</script> -->

@endsection