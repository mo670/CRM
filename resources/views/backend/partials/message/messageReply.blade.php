@extends('master')
@section('main')

    <div class="col-12">
        <div class="col-lg-12" style="margin: auto">

            <div class="card">
              <div class="card-body">
                @if ($msg->subject ==!null)
                <h5 class="card-title text-center">Subject : {{ $msg->subject }}</h5>
  
                @else
                    
                @endif
                
                <!-- Horizontal Form -->
                <form action="{{ route('reply.message',$msg->customer_id) }}" method="post">
                    @method('put')
                    @csrf

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Customer:</label>
                    <div class="col-sm-10">
                      <p>{{ $msg->customer_message }}</p>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Admin :</label>
                    @if ($msg->admin_message == !null)
                    <div class="col-sm-10">
                        <p>{{ $msg->admin_message }}</p>
                    </div>
                    @else
                    <div class="col-sm-10">
                        <p class="text-danger">Not Replied Yet!</p>
                    </div>
                    @endif
                  </div>
                  <div class="col-lg-12">
                    <label for="" class="mb-4">Type your Message : </label>
                    <input type="text" class="form-control mb-3" name="admin_message" required placeholder="Type your message">
                </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Reply</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- End Horizontal Form -->
  
              </div>
            </div>
  
          </div>
    </div>
    
@endsection