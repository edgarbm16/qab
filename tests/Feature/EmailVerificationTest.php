<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Features as JetstreamFeatures;
use Tests\TestCase;

class EVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_e_verification_screen_can_be_rendered()
    {
        if (! Features::enabled(Features::eVerification())) {
            return $this->markTestSkipped('E verification not enabled.');
        }

        $user = User::factory()->withPersonalTeam()->create([
            'e_verified_at' => null,
        ]);

        $response = $this->actingAs($user)->get('/e/verify');

        $response->assertStatus(200);
    }

    public function test_e_can_be_verified()
    {
        if (! Features::enabled(Features::eVerification())) {
            return $this->markTestSkipped('E verification not enabled.');
        }

        Event::fake();

        $user = User::factory()->create([
            'e_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->e)]
        );

        $response = $this->actingAs($user)->get($verificationUrl);

        Event::assertDispatched(Verified::class);

        $this->assertTrue($user->fresh()->hasVerifiedE());
        $response->assertRedirect(RouteServiceProvider::HOME.'?verified=1');
    }

    public function test_e_can_not_verified_with_invalid_hash()
    {
        if (! Features::enabled(Features::eVerification())) {
            return $this->markTestSkipped('E verification not enabled.');
        }

        $user = User::factory()->create([
            'e_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1('wrong-e')]
        );

        $this->actingAs($user)->get($verificationUrl);

        $this->assertFalse($user->fresh()->hasVerifiedE());
    }
}
