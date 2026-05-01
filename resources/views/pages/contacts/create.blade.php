<x-layouts.app title="Contact Create">
    <div class="container form-container">
        <div class="form-header">
          <h2>Create Contact</h2>
          <a href="{{ route('contacts.index') }}" class="btn btn--link">
            <x-bi-arrow-left />
            Back to Contacts
          </a>
        </div>
        
        <form action="{{ route('contacts.store') }}" method="POST" class="contact-form">
            @csrf

            <div class="form-group name">
                <label for="name">Name</label>
                <input type="text" 
                  name="name" 
                  id="name" 
                  placeholder="Name" 
                  value="{{ old('name') }}"
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
                  value="{{ old('contact') }}"
                  required>
                <span class="input-error">{{ $errors->first('contact') }}</span>
            </div>

            <div class="form-group email">
                <label for="email">Email</label>
                <input type="email" 
                  name="email" 
                  id="email" 
                  placeholder="Email" 
                  value="{{ old('email') }}"
                  required>
                <span class="input-error">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group form-group--actions">
              <button type="submit" class="btn">Create</button>
              <a href="{{ route('contacts.index') }}" class="btn btn--secondary">Cancel</a>
            </div>
        </form>
    </div>

    <x-slot:scripts>
      <script src="{{ asset('js/contacts/form.js') }}" defer></script>
    </x-slot:scripts>
</x-layouts.app>