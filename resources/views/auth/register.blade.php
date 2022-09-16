@extends('base')

@section('content')
<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
         <div class="card bg-black text-light mt-5">
              <div class="card-header bg-black text-center text-light">
                   <img src="avatar.png" class="avatar">
              </div>

              <h1 class="text-center mt-5">Register</h1>

                <form action="{{'/register'}}" method="POST">
                {{csrf_field()}}

                    <div class="card-body">
                         <div class="mb-3">
                                  <label for="name">Name</label>
                                  <input type="text" id="name" name="name" class="form-control"">
                         </div>
                         @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        
                         <div class="mb-3">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" name="email" placeholder="sample@gmail.com" class="form-control">
                          </div>
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                          <div class="mb-3">
                                  <label for="password">Password</label>
                                  <input type="password" id="password" name="password" class="form-control" v-model="user.password">
                          </div>
                          @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                          <div class="mb-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            </div>
                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                          <div class="d-flex">
                            <div class="flex-grow-1">
                                <a href="{{'/'}}">Already have an account?</a>
                            </div>
                            <button class="btn btn-primary px-5" type="submit">REGISTER</button>
                        </div>
                        </form>
                   </div>
         </div>
    </div>     
</div>
<style>
    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }
</style>
@endsection
