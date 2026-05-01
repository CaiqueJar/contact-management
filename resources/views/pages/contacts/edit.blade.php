<x-layouts.app title="Contact Edit">
    <div class="container form-container">
        <div class="form-header">
          <h2>Edit Contact</h2>
          <a href="{{ route('contacts.index') }}" class="btn btn--link">
            <x-bi-arrow-left />
            Back to Contacts
          </a>
        </div>
        
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="contact-form">
            @csrf
            @method('PUT')

            <div class="form-group name">
                <label for="name">Name</label>
                <input type="text" 
                  name="name" 
                  id="name" 
                  placeholder="Name" 
                  value="{{ $contact->name ?? old('name') }}"
                  required>
                <span class="input-error">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group contact">
                <label for="contact">Contact</label>
                <input type="text" 
                  name="contact" 
                  id="contact" 
                  placeholder="Contact" 
                  maxlength="9" 
                  value="{{ $contact->contact ?? old('contact') }}"
                  required>
                <span class="input-error">{{ $errors->first('contact') }}</span>
            </div>

            <div class="form-group email">
                <label for="email">Email</label>
                <input type="email" 
                  name="email" 
                  id="email" 
                  placeholder="Email" 
                  value="{{ $contact->email ?? old('email') }}"
                  required>
                <span class="input-error">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group form-group--actions">
              <button type="submit" class="btn">Update Contact</button>
              <a href="{{ route('contacts.index') }}" class="btn btn--secondary">Cancel</a>
            </div>
        </form>
    </div>

    <x-slot:scripts>
      <script src="{{ asset('js/contacts/form.js') }}" defer></script>
    </x-slot:scripts>
</x-layouts.app>