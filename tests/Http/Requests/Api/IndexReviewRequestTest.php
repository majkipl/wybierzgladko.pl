<?php

namespace Http\Requests\Api;

use App\Http\Requests\Api\IndexReviewRequest;
use Illuminate\Support\Facades\Validator;
use Tests\Feature\Api\Validation\ValidationTestCase;

class IndexReviewRequestTest extends ValidationTestCase
{
    /**
     * @param array $arr
     * @param array $without
     * @return array
     */
    public function getData(array $arr = [], array $without = []): array
    {
        $data = [
            'searchable' => ['id','content','product'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
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

        $validator = Validator::make($data, (new IndexReviewRequest())->rules());

        $this->assertFalse($validator->fails());
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_exists()
    {
        $data = $this->getData([], ['searchable']);

        $this->expectValidationException($data, IndexReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_array()
    {
        $data = $this->getData([
            'searchable' => 'id,content,product'
        ]);

        $this->expectValidationException($data, IndexReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_offset_is_not_an_integer()
    {
        $data = $this->getData([
            'offset' => 'abc'
        ]);

        $this->expectValidationException($data, IndexReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_limit_is_not_an_integer()
    {
        $data = $this->getData([
            'limit' => 'abc'
        ]);

        $this->expectValidationException($data, IndexReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_sort_is_invalid()
    {
        $data = $this->getData([
            'sort' => 'invalid_column'
        ]);

        $this->expectValidationException($data, IndexReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_order_is_invalid()
    {
        $data = $this->getData([
            'order' => 'invalid_order'
        ]);

        $this->expectValidationException($data, IndexReviewRequest::class);
    }
}
