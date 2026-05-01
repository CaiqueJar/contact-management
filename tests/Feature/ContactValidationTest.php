<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_creation_shows_validation_errors_for_invalid_fields(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('contacts.store'), [
                'name' => 'Ana',
                'contact' => '12345',
                'email' => 'invalid-email',
            ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }

    public function test_contact_update_shows_validation_errors_for_invalid_fields(): void
    {
        $user = User::factory()->create();
        $contact = Contact::factory()->create([
            'name' => 'Existing Contact',
            'contact' => '123456789',
            'email' => 'existing@example.com',
        ]);

        $response = $this->actingAs($user)
            ->put(route('contacts.update', $contact->id), [
                'name' => 'Joe',
                'contact' => 'abc',
                'email' => 'not-an-email',
            ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }
}
