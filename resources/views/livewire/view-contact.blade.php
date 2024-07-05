<div class="card offset-3 col-6">
  <div class="card-header">
    View Contact
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$contact->name}}</h5>
    <p class="card-text">{{$contact->email}}</p>
    <p class="card-text">{{$contact->phone}}</p>
    <p class="card-text">{{$contact->address}}</p>
    <a wire:navigate href="/Contacts" class="btn btn-primary">Back</a>
  </div>
</div>