<x-layouts.app title="Contact Details">
  <div class="container show-container">
    <div class="show-header">
      <h2>Contact {{ $contact->name }}</h2>

      <div>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn--link btn--primary">
          <x-bi-pencil-square />
          Edit contact
        </a>
        <a href="{{ route('contacts.index') }}" class="btn btn--link">
          <x-bi-arrow-left />
          Back to Contacts
        </a>
      </div>
    </div>

    <p><strong>ID:</strong> {{ $contact->id }}</p>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Contact:</strong> {{ $contact->contact }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Created at:</strong> {{ $contact->created_at }}</p>
    <p><strong>Updated at:</strong> {{ $contact->updated_at }}</p>
  </div>
</x-layouts.app>
