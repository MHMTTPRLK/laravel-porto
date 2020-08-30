<div role="main" class="main">
    <div class="slider-container rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider manual">
            <ul>
                @foreach($sliders as $slider)
                <li data-transition="zoom" data-title="{{$slider->slider_slug}}"
                    data-thumb="{{asset($slider->slider_image)}}">

                    <img src="{{asset($slider->slider_image)}}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">


                </li>
                @endforeach

            </ul>
        </div>
    </div>
