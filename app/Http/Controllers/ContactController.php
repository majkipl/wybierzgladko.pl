<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * @param ContactRequest $request
     * @return JsonResponse
     */
    public function send(ContactRequest $request): JsonResponse
    {
        try {
            $request->validated();

            $this->contactService->sendMail(env('APP_CONTACT_MAIL'), $request->all(['name', 'email', 'message']));

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'message' => 'Widomość została wysłana. '
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'errors' => [
                        'main' => [
                            'Nie możemy wysłać Twojej wiadomości, aby rozwiązać problem skontaktuj się z administratorem serwisu.'
                        ]
                    ],
                    'message' => 'Wewnętrzny błąd serwisu.'
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }
}
