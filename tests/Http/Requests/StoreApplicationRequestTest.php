<?php

namespace Http\Requests;

use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use App\Models\Whence;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\Feature\Api\Validation\ValidationTestCase;
use Illuminate\Support\Facades\Validator;

class StoreApplicationRequestTest extends ValidationTestCase
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
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->word . '@gmail.com',
            'phone' => $this->faker->numerify('+48#########'),
            'address' => $this->faker->streetAddress,
            'address_nb' => $this->faker->word,
            'zip' => $this->faker->numerify('##-###'),
            'city' => $this->faker->city,
            'img_receipt' => $this->createTestFile('receipt.jpg', 1024),
            'iban' => $this->faker->numerify('##########################'),
            'reason' => $this->faker->text(4000),
            'legal_1' => true,
            'legal_2' => true,
            'legal_3' => true,
            'legal_4' => true
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

        $validator = Validator::make($data, (new StoreApplicationRequest())->rules());

        $this->assertFalse($validator->fails());
    }

    /** @test */
    public function validation_fails_if_firstname_is_not_exists()
    {
        $data = $this->getData([], ['firstname']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_firstname_is_not_a_string()
    {
        $data = $this->getData([
            'firstname' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_firstname_is_less_that_min_length()
    {
        $data = $this->getData([
            'firstname' => Str::random(2)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_firstname_is_exceeds_max_length()
    {
        $data = $this->getData([
            'firstname' => Str::random(129),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_lastname_is_not_exists()
    {
        $data = $this->getData([], ['lastname']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_lastname_is_not_a_string()
    {
        $data = $this->getData([
            'lastname' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_lastname_is_less_that_min_length()
    {
        $data = $this->getData([
            'lastname' => Str::random(2)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_lastname_is_exceeds_max_length()
    {
        $data = $this->getData([
            'lastname' => Str::random(129),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_email_is_not_exists()
    {
        $data = $this->getData([], ['email']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_email_is_not_rfc()
    {
        $data = $this->getData([
            'email' => Str::random(16),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_email_is_not_unique()
    {
        $promotion = factory(Application::class)->create();

        $data = $this->getData([
            'email' => $promotion->email,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_phone_is_not_exists()
    {
        $data = $this->getData([], ['phone']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_phone_is_not_regexp()
    {
        $data = $this->getData([
            'phone' => $this->faker->numerify('+48########'),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_address_is_not_exists()
    {
        $data = $this->getData([], ['address']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_address_is_not_a_string()
    {
        $data = $this->getData([
            'address' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_address_is_exceeds_max_length()
    {
        $data = $this->getData([
            'address' => Str::random(256),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_address_nb_is_not_exists()
    {
        $data = $this->getData([], ['address_nb']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_address_nb_is_not_a_string()
    {
        $data = $this->getData([
            'address_nb' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_address_nb_is_exceeds_max_length()
    {
        $data = $this->getData([
            'address_nb' => Str::random(17),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_not_exists()
    {
        $data = $this->getData([], ['city']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_not_a_string()
    {
        $data = $this->getData([
            'city' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_less_that_min_length()
    {
        $data = $this->getData([
            'city' => Str::random(1)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_exceeds_max_length()
    {
        $data = $this->getData([
            'city' => Str::random(65),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_zip_is_not_exists()
    {
        $data = $this->getData([], ['zip']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_zip_is_not_regex()
    {
        $data = $this->getData([
            'zip' => $this->faker->numerify('#####'),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_not_exists()
    {
        $data = $this->getData([], ['img_receipt']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_not_file()
    {
        $data = $this->getData([
            'img_receipt' => $this->faker->word,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_not_file_image()
    {
        $data = $this->getData([
            'img_receipt' => $this->createTestFile('test.pdf', 1024),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_too_large()
    {
        $data = $this->getData([
            'img_receipt' => $this->createTestFile('test.jpg', 5000),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_iban_is_not_exists()
    {
        $data = $this->getData([], ['iban']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_iban_is_not_regexp()
    {
        $data = $this->getData([
            'iban' => $this->faker->numerify('+48########'),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }



    /** @test */
    public function validation_fails_if_reason_is_not_exists()
    {
        $data = $this->getData([], ['reason']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_reason_is_not_a_string()
    {
        $data = $this->getData([
            'reason' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_reason_is_less_that_min_length()
    {
        $data = $this->getData([
            'reason' => Str::random(2)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_reason_is_exceeds_max_length()
    {
        $data = $this->getData([
            'reason' => Str::random(4097),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_legal_1_is_exist()
    {
        $data = $this->getData([], ['legal_1']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_legal_2_is_exist()
    {
        $data = $this->getData([], ['legal_2']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_legal_3_is_exist()
    {
        $data = $this->getData([], ['legal_3']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

}
