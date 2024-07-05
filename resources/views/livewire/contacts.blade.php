<div>
<button wire:navigate href="/contactinfo/create" class="btn btn-success btn-sm">Create</button>
<livewire:flash-message/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{$contact->id}}</th>
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->phone}}</td>
      <td>{{$contact->address}}</td>
      <td>
        <button wire:navigate href="/Contacts/{{$contact->id}}" class="btn btn-primary btn-sm">View</button>
        <button wire:navigate href="/Contacts/{{$contact->id}}/edit" class="btn btn-secondary btn-sm">Edit</button>
        <button wire:click="deletecontact({{$contact->id}})" class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
    <tr>
    @endforeach
</tbody>
</table>
</div>