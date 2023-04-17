<div class="elementor-element elementor-element-415a689 elementor-widget elementor-widget-rt-event" data-id="415a689"
    data-element_type="widget" data-widget_type="rt-event.default">
    <div class="elementor-widget-container">
        <div class="schedule-wrp4 schedule-layout-wrp">
            <div class="row no-gutters full-width">
                @php $images = array('fundo1.jpg', 'fundo2.jpg', 'fundo3.jpg', 'fundo4.jpg'); @endphp
                @foreach ($schedulesI as $item)
                    @php
                        $random_index = rand(0, 3);
                        $bg_image = $images[$random_index];
                    @endphp

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="schedule-layout4 bg-common"
                            style="background-image: url('/site/images/banner/{{ $bg_image }}'); background-size: cover;background-position: center; height:550px;">
                            <div class="item-content zindex-up">
                                <ul>
                                    <li>
                                        <h6 class="title sp-date title-bold hover-yellow color-light"
                                            style="font-family:itgestbook!important;font-size:15px!important;">
                                            {{ $item->theme }}
                                        </h6>
                                    </li>
                                    <li class="s4-title">
                                        <h3 class="title sp-name title-medium color-light"
                                            style="font-family:itgestbook!important;font-size:20px!important;">
                                            {{ $item->program }}
                                        </h3>
                                        <p>{{ date('H:i', strtotime($item->start)) }} -
                                            {{ date('H:i', strtotime($item->end)) }}</p>
                                    </li>
                                    @if ($item->speaker)
                                        <li class="s4-speaker">

                                            <p>-</p>
                                            <h5 class="title title-medium color-light"
                                                style="font-family:itgestbook!important;font-size:20px!important;">
                                                {{ $item->speaker }}
                                                <br>
                                                <small>{{ $item->title }}</small>
                                            </h5>
                                        </li>
                                    @endif

                                    @if ($item->theme == '')
                                        <li class="s4-speaker">
                                            <h5 class="title title-medium color-light"
                                                style="font-family:itgestbook!important;font-size:20px!important;">
                                                {{ $item->speaker }}
                                            </h5>
                                            <p>Oradores</p>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
