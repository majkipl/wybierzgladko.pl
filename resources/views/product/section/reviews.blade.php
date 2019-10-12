@if(count($reviews))
    <section class="reviews my--70 bg-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" id="reviews">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb--30">
                    <h2 class="text-uppercase mt--50 py--60">opinie klientów</h2>
                </div>
            </div>
            <div class="row row-eq-height text-center mb--70">
                <div class="col-1 col-sm-1 col-lg-2 reviews-slider-prev text-right px-0 px-md--15">
                    <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAhFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD8qm6wAAAAK3RSTlMAAQIECAoLDQ4PEBMUFxkaGxweJicpKzx7i5qbnaatr7DFztna3ubt9ff9UbhyhgAAAPZJREFUeNrtzslOAgEYBOEeVFxQQcV9BTfG//3fTy6GwXjQg1PGVJ87qS/5rW0MQu5wVnU75Ppnb7Xc64jtc4KPPiVY9RlBt08I1vv9Cz73l4Jdtl81h/tVB3C/pnC/tuH+Jdy/a+D+wL59+/btE/17+/bt27dvH+g/2Ldv3759+/bt27f/D/vHcD9PcH8H7mfva8BV0xcgL7TgtGjBuQIFChQoUKBAgQIFCn4kuFagQIECBQr+lOBGgQIFChQo6OwitGCLFpwEFozDCh6boILFfkIKFuOEFPTfXxe0QL8rYPorQTtJSEF7FGzT56rZKOSGm9+6vQOB+9uGFj/W7gAAAABJRU5ErkJggg=="
                            alt="prev" class="prev"/>
                </div>
                <div class="col-10 col-sm-10 col-lg-8">
                    <ul id="reviewsSlider" class="text-left">
                        @foreach($reviews as $review)
                            <li>
                                <p class="pb--20 px-sm--30">{{ $review->content }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-1 col-sm-1 col-lg-2 reviews-slider-next text-left px-0 px-md--15">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAilBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAATAggvAAAALXRSTlMAAQIFBwgKCwwNDxARExgbHCIsMzo7PFBndYWGiImLjJidubzIz+Lk5ujr7fMBvYaJAAAA+UlEQVR42u3bV27CYBBF4TGmOaGXECAJvTP73x5CSMgYkHiJr8R/7gLmOxsYsxdWiE254tR91db51bWf15f5G7/sS+yLClK+pCBJ+4KCZOuuLChn/bwLFu7Sgk93bUHLxQVFVxcM1QXRjAIKKKCAAgoooIACCiiggAIKKKCAAgoooIACCih4k4KOumAfqQsaeQXY6HFAU+wfC1rfe2J/gB+EP8bHD9j/wcfHx8cP0v/Fx8eX+X/4+AH7E3x8fHz8IP1vsR+L/WePTrn5VhP7Zkuxbx8HrW9WP2j9u4Lc/UyBwL8pkPipApF/LZD5Zsncfdc15UqV/7t9AlBN8PZhAttoAAAAAElFTkSuQmCC"
                         alt="next" class="next"/>
                </div>
            </div>
        </div>
    </section>
@endif
