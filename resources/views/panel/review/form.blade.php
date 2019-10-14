@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Opinia</h1>
                </div>
            </div><!--/.row-->
            <form class="form row save" id="saveForm" method="{{ isset($review) ? 'put' : 'post' }}"
                  action="{{ route(isset($review) ? 'api.review.update' : 'api.review.add') }}">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        @component('components.forms.input.text', [
                            'name' => 'content',
                            'value' => isset($review) ? $review->content : '',
                            'placeholder' => 'Treść',
                            'required' => true,
                            'max' => 128,
                            'error' => '',
                            ])
                        @endcomponent
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        @component('components.forms.select', [
                            'name' => 'product',
                            'value' => '',
                            'placeholder' => 'Produkt',
                            'required' => true,
                            'error' => '',
                            'items' => $products,
                            'selected' => isset($review) ? $review->product : 0
                            ])
                        @endcomponent
                    </div>

                    <div class="col-12 col-lg-10 col-lg-offset-1 text-center">
                        <button class="button button-red mx-auto submit" type="submit">ZAPISZ</button>
                        @if(isset($review) && $review->id)
                            @component('components.forms.input.hidden', [
                                'name' => 'id',
                                'value' => $review->id,
                                'error' => '',
                                ])
                            @endcomponent
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
