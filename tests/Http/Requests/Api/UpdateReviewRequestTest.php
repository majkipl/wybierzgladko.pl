<?php

namespace Http\Requests\Api;

use App\Enums\Product;
use App\Http\Requests\Api\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\Feature\Api\Validation\ValidationTestCase;
use Illuminate\Support\Facades\Validator;

class UpdateReviewRequestTest extends ValidationTestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @param array $arr
     * @param array $without
     * @return array
     */
    public function getData(array $arr = [], array $without = []): array
    {
        $review = factory(Review::class)->create();

        $data = [
            'content' => $this->faker->text(4096),
            'product' => $this->faker->randomElement(Product::ALL),
            'id' => $review->id
        ];

        foreach ($without as $item) {
            if (array_key_exists($item, $data)) {
                unset($data[$item]);
            }
        }

        return array_merge($data, $arr);
    }

    /** @test */
    public function validation_pass_for_valid_data()
    {
        $data = $this->getData();

        $validator = Validator::make($data, (new UpdateReviewRequest())->rules());

        $this->assertFalse($validator->fails());
    }

    /** @test */
    public function validation_fails_if_content_is_missing()
    {
        $data = $this->getData([], ['content']);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_content_is_not_string()
    {
        $data = $this->getData([
            'content' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_content_is_exceeds_max_length()
    {
        $data = $this->getData([
            'content' => Str::random(4097),
        ]);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_product_is_missing()
    {
        $data = $this->getData([], ['product']);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_product_is_not_product_type()
    {
        $data = $this->getData([
            'product' => $this->faker->word
        ]);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_id_is_missing()
    {
        $data = $this->getData([], ['id']);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_id_is_not_integer()
    {
        $data = $this->getData([
            'id' => $this->faker->word
        ]);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_id_is_not_product_exist()
    {
        $data = $this->getData([
            'id' => $this->faker->randomNumber()
        ]);

        $this->expectValidationException($data, UpdateReviewRequest::class);
    }
}
