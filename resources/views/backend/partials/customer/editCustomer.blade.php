@extends('master')
@section('main')
 <!-- Multi Columns Form -->
 <form class="row g-3" action = "{{route('customer.update',$editCustomer->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="col-md-12">
      <label for="inputName5" class="form-label">name</label>
      <input type="text" class="form-control" name="name" value="{{$editCustomer->name}}" id="inputName5">
    </div>
    <div class="col-md-6">
      <label for="inputEmail5" class="form-label">email</label>
      <input type="email" class="form-control" name="email" value="{{$editCustomer->email}}" id="inputEmail5">
    </div>
    <div class="col-md-6">
      <label for="inputPassword5" class="form-label">password</label>
      <input type="password" class="form-control" name="password" value="{{$editCustomer->password}}" id="inputPassword5">
    </div>
    <div class="col-12">
      <label for="inputAddress5" class="form-label">phone</label>
      <input type="text" class="form-control" name="phone" value="{{$editCustomer->phone}}" id="inputAddres5s" placeholder="customer phone">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">facebook page</label>
      <input type="text" class="form-control" name="facebook" value="{{$editCustomer->facebook}}" id="inputAddress2" placeholder="customer facebook page">
    </div>
    {{-- <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div> --}}
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-sm">Update</button>
      <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
    </div>
  </form><!-- End Multi Columns Form -->
@endsection
