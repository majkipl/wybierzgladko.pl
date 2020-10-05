<?php

namespace Http\Controllers\Api;

use App\Enums\UserRole;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class ReviewControllerTest extends TestCase
{
    use RefreshDatabase;

    public function getUser()
    {
        return factory(User::class)->create([
            'role' => UserRole::ADMIN
        ]);
    }

    /** @test */
    public function it_response_http_forbidden_if_without_token_for_list_review()
    {
        $response = $this->getJson(route('api.review'));
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_response_http_forbidden_if_token_wrong_for_list_review()
    {
        $queryParams = [
            'searchable' => ['id', 'content', 'product'],
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . Str::random(32),
        ])->getJson(route('api.review') . '?' . http_build_query($queryParams));

        $response
            ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_can_list_review()
    {
        $review = factory(Review::class)->times(5)->create();

        $queryParams = [
            'searchable' => ['id', 'content', 'product'],
        ];

        $token = JWTAuth::fromUser($this->getUser());

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson(route('api.review') . '?' . http_build_query($queryParams));

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($review->count(), 'rows');
    }
}
