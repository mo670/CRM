@extends('master')
@section('main')
 <!-- Multi Columns Form -->
 <form class="row g-3" action="{{route('package.create')}}" method="POST">
    @csrf
    <div class="col-md-12">
      <label for="inputName5" class="form-label">pack_name</label>
      <input type="text" class="form-control" name="pack_name" id="inputName5">
    </div>
    <div class="col-md-6">
      <label for="inputEmail5" class="form-label">pack_price</label>
      <input type="number" class="form-control" name="pack_price" min="00" placeholder=" Place the Amount" id="inputEmail5">
    </div>
    <div class="col-md-6">
      <label for="inputPassword5" class="form-label">pack_amount</label>
      <input type="number" class="form-control" name="pack_amount" id="inputPassword5">
    </div>
    <div class="col-12">
      <label for="inputAddress5" class="form-label">pack description</label>
      <input type="text" class="form-control" name="pack_description" id="inputAddres5s" placeholder="pack description">
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
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form><!-- End Multi Columns Form -->
@endsection
