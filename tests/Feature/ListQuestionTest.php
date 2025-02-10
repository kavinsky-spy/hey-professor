<?php

use App\Models\{Question, User};

use function Pest\Laravel\{actingAs, get};

it(
    'should list all questions',
    function () {

        // Arrange
        // Create questions
        $user      = User::factory()->create();
        $questions = Question::factory()->count(5)->create();

        actingAs($user);

        // Act
        // Access route
        $response = get(route('dashboard'));

        // Assert
        // Check if question list is showing

        /** @var Question $item */
        foreach ($questions as $item) {
            $response->assertSee($item->question);
        }

    }
);
