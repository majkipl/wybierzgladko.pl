<?php

namespace Http\Requests\Api;

use App\Http\Requests\Api\IndexApplicationRequest;
use Tests\Feature\Api\Validation\ValidationTestCase;

class IndexApplicationRequestTest extends ValidationTestCase
{

    /** @test */
    public function validation_pass_for_valid_data()
    {
        $data = [
            'searchable' => ['id','firstname','lastname','email','phone','address','address_nb','zip','city','img_receipt','iban','created_at','legal_1','legal_2','legal_3','legal_4'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->runValidationTest($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_exists()
    {
        $data = [
            'searchable' => ['slug'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_array()
    {
        $data = [
            'searchable' => 'id,firstname,lastname,email,phone,address,address_nb,zip,city,img_receipt,iban,created_at,legal_1,legal_2,legal_3,legal_4', // Should be an array
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_offset_is_not_an_integer()
    {
        $data = [
            'searchable' => ['id', 'firstname'],
            'offset' => 'abc', // Should be an integer
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_limit_is_not_an_integer()
    {
        $data = [
            'searchable' => ['id', 'firstname'],
            'offset' => 0,
            'limit' => 'abc', // Should be an integer
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_sort_is_invalid()
    {
        $data = [
            'searchable' => ['id', 'firstname'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'invalid_column', // Should be 'id', 'name', or 'slug'
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_order_is_invalid()
    {
        $data = [
            'searchable' => ['id', 'firstname'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'invalid_order', // Should be 'asc' or 'desc'
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }
}
