<div class="card offset-3 col-6">
  <div class="card-header">
    Contact List Form
  </div>
  <div class="card-body">
  <form wire:submit="save">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
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
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input wire:model="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input wire:model="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
        @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  </div>
  <button wire:navigate href="/Contacts" class="btn btn-secondary btn-sm">Back</button>
  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>
  </div>
</div>