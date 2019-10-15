<?php

namespace Http\Requests\Api;

use App\Http\Requests\Api\AddReviewRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\Feature\Api\Validation\ValidationTestCase;
use Illuminate\Support\Facades\Validator;

class AddReviewRequestTest extends ValidationTestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * @param array $arr
     * @param array $without
     * @return array
     */
    public function getData(array $arr = [], array $without = []): array
    {
        $data = [
            'content' => $this->faker->text(4096),
            'product' => $this->faker->randomElement(\App\Enums\Product::ALL),
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

        $validator = Validator::make($data, (new AddReviewRequest())->rules());

        $this->assertFalse($validator->fails());
    }

    /** @test */
    public function validation_fails_if_content_is_missing()
    {
        $data = $this->getData([], ['content']);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_content_is_not_string()
    {
        $data = $this->getData([
            'content' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_content_is_exceeds_max_length()
    {
        $data = $this->getData([
            'content' => Str::random(4099)
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_product_is_missing()
    {
        $data = $this->getData([], ['product']);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_product_is_not_in_enum_product()
    {
        $data = $this->getData([
            'product' => $this->faker->word
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

}
