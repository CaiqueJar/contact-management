<x-layouts.app title="Contact Details">
  <div class="container show-container">
    <div class="show-header">
      <h2>Contact {{ $contact->name }}</h2>

      <a href="{{ route('contacts.index') }}" class="btn btn--link">
        <x-bi-arrow-left />
        Back to Contacts
      </a>
    </div>

    <div class="show-details">
      <p><strong>ID:</strong> {{ $contact->id }}</p>
      <p><strong>Name:</strong> {{ $contact->name }}</p>
      <p><strong>Contact:</strong> {{ $contact->contact }}</p>
      <p><strong>Email:</strong> {{ $contact->email }}</p>
      <p><strong>Created at:</strong> {{ $contact->created_at }}</p>
      <p><strong>Updated at:</strong> {{ $contact->updated_at }}</p>
    </div>

    <div class="show-actions">
      <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn--primary">
          <x-bi-pencil-square />
          Edit contact
        </a>

        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline-form">
          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn--danger" onclick="return confirm('Are you sure you want to delete this contact?')">
            <x-bi-trash />
            Delete contact
          </button>
        </form>
    </div>
  </div>
</x-layouts.app>
