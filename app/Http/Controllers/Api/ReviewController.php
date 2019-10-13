<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddReviewRequest;
use App\Http\Requests\Api\IndexReviewRequest;
use App\Http\Requests\Api\UpdateReviewRequest;
use App\Models\Review;
use App\Traits\ApiRequestParametersTrait;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    use ApiRequestParametersTrait;

    public function index(IndexReviewRequest $request): JsonResponse
    {
        $params = $this->getRequestParameters($request);
        extract($params);

        $query = Review::search($search, $searchable)->filter($filter)->orderBy($sort, $order);

        $itemsCount = $query->count('id');
        $items = $query->offset($offset)->limit($limit)->get();

        return response()->json([
            'total' => $itemsCount,
            'rows' => $items
        ], Response::HTTP_OK);
    }

    public function add(AddReviewRequest $request): JsonResponse
    {
        DB::beginTransaction();

        try {
            $review = new Review($request->validated());
            $params = $request->all();

            $review->save();

            DB::commit();

            Cache::forget('reviews');
            Cache::forget('reviews_'.$params['product']);

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'url' => route('back.review')
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json(
                [
                    'errors' => [
                        'main' => [
                            'Nie możemy dodać Twojego zgłoszenia, aby rozwiązać problem skontaktuj się z administratorem serwisu.'
                        ]
                    ],
                    'message' => 'Wewnętrzny błąd serwisu.'
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }

    public function update(UpdateReviewRequest $request)
    {
        DB::beginTransaction();

        try {
            $review = Review::findOrFail($request->input('id'));

            $product_old = $review->product;

            $review->fill($request->validated());
            $review->save();

            DB::commit();

            Cache::forget('reviews');
            Cache::forget('reviews_' . $product_old);
            Cache::forget('reviews_' . $request->input('id'));


            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'url' => route('back.review')
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json(
                [
                    'errors' => [
                        'main' => [
                            'Nie możemy zaktualizować rekordu, aby rozwiązać problem skontaktuj się z administratorem serwisu.'
                        ]
                    ],
                    'message' => 'Wewnętrzny błąd serwisu.'
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }

    public function delete(Review $review): JsonResponse
    {
        DB::beginTransaction();

        try {
            $review->delete();

            DB::commit();

            Cache::forget('reviews');
            Cache::forget('reviews_' . $review->product);

            return response()->json(
                [
                    'status' => 'success',
                    'message' => 'Rekord został pomyślnie usunięty.'
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json(
                [
                    'errors' => [
                        'main' => [
                            'Nie możemy usunąć rekordu, aby rozwiązać problem skontaktuj się z administratorem serwisu.'
                        ]
                    ],
                    'message' => 'Wewnętrzny błąd serwisu.'
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }
}
