<x-layouts.app title="Contacts">

  <div class="container table-container">
    <div class="table-header">
      <h2>Contacts</h2>

      <a href="{{ route('contacts.create') }}" class="btn">Add Contact</a>
    </div>

    <table class="table">
      <thead class="table__head">
        <tr class="table__row table__row--head">
          <th class="table__header">Name</th>
          <th class="table__header">Contact</th>
          <th class="table__header">Email</th>
          <th class="table__header">Actions</th>
        </tr>
      </thead>
      <tbody class="table__body">
        @foreach ($contacts as $contact)
          <tr class="table__row table__row--body">
            <td class="table__cell">{{ $contact->name }}</td>
            <td class="table__cell">{{ $contact->contact }}</td>
            <td class="table__cell">{{ $contact->email }}</td>
            <td class="table__cell">
              <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn--link">
                <x-bi-eye />
                View
              </a>
              <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn--primary btn--link">
                <x-bi-pencil-square />
                Edit
              </a>

              <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn--link btn--danger">
                    <x-bi-trash />
                    Delete
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="pagination">
      {{ $contacts->links() }}
    </div>
  </div>

</x-layouts.app>
