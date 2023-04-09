@extends('master')
@section('main')
 <!-- Multi Columns Form -->
 @include('backend.layouts.errorAndSuccessMessage')
 <form class="row g-3" action = "{{route('package.update',$editPackage->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="col-md-12">
        <label for="inputName5" class="form-label">pack_name</label>
        <input type="text" class="form-control" name="pack_name" value="{{$editPackage->pack_name}}"  id="inputName5">
      </div>
      <div class="col-md-6">
        <label for="inputEmail5" class="form-label">pack_price</label>
        <input type="number" class="form-control" name="pack_price" value="{{$editPackage->pack_price}}"  id="inputEmail5">
      </div>
      <div class="col-md-6">
        <label for="inputPassword5" class="form-label">pack_amount</label>
        <input type="number" class="form-control" name="pack_amount" value="{{$editPackage->pack_amount}}"  id="inputPassword5">
      </div>
      <div class="col-12">
        <label for="inputAddress5" class="form-label">pack_description</label>
        <input type="text" class="form-control" name="pack_description" value="{{$editPackage->pack_description}}"  id="inputAddres5s" placeholder="pack info">
      </div>
      
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-sm">Update</button>
      <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
    </div>
  </form><!-- End Multi Columns Form -->
@endsection
