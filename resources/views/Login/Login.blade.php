@extends('Layouts.MainMembers')

@section('Container')


<div class="row justify-content-center mt-4 mb-5">
    <div class="col-md-4 mt-5">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        @if(session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif




       <main class="form-signin w-100 m-auto">
           <h1 class="h3 mb-3 fw-normal text-center">Please Login!</h1>
         <form action="/loginusercek" method="POST">
            @csrf
           <div class="form-floating">
             <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
             <label for="floatingInput">Email address</label>
             @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
             @enderror
           </div>
           <div class="form-floating">
             <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
             <label for="floatingPassword">Password</label>
           </div>


           <button class="btn btn-primary w-100 py-2" type="submit">Login</button>

         </form>
         <small class="d-block text-center mt-3">Not registerd ? <a href="/register">Register Now!</a></small>
       </main>

    </div>
</div>




@endsection
