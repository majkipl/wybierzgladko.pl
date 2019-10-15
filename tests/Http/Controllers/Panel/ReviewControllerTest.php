<?php

namespace Http\Controllers\Panel;

use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Panel\PanelBaseTestCase;

class ReviewControllerTest extends PanelBaseTestCase
{
    use RefreshDatabase;

    public $route = 'back.review';

    public $model = Review::class;
}
