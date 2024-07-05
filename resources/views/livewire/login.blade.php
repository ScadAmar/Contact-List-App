<div class="card offset-3 col-6">
  <div class="card-header">
    Login
  </div>
  <form wire:submit="loginUser">
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1">
    <div>
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    <div class="mb-3">
        <button wire:navigate href="/register" class="btn btn-success">Register</button><br>
        Don't have an account?

    </div>
  </div>
</div>