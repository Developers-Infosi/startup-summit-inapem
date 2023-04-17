@extends('layouts.merge.site')
@section('titulo', 'Oradores')
@section('content')
    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Oradores</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="elementor-section elementor-top-section elementor-element elementor-element-7cb28d8a elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default my-5 py-5"
        data-id="7cb28d8a" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1edeeb8f"
                data-id="1edeeb8f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-793bfde4 elementor-widget elementor-widget-rt-title"
                        data-id="793bfde4" data-element_type="widget"
                        data-widget_type="rt-title.default">
                        <div class="elementor-widget-container">
                            <div
                                class="rt-el-title section-heading title-black color-dark text-center style1">
                                <h2 class="rtin-title">Painel de Debate</h2>
                                <p><b>A visão das entidades públicas sobre o impacto dos
                                        ataques cibernéticos na sua actividade.</b></p>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5cb6e841 elementor-widget elementor-widget-rt-speaker-grid"
                        data-id="5cb6e841" data-element_type="widget"
                        data-widget_type="rt-speaker-grid.default">
                        <div class="elementor-widget-container">
                            <div class="rt-el-speaker-grid-3 row">

                                @foreach ($speakers as $row)
                                    @if ($row->id == 8)
                                        <div
                                            class="rtin-item col-lg-3 col-md-6 col-12 mx-auto">
                                            <div class="speaker-layout3">
                                                <img width="400" height="400"
                                                    src="/storage/{{ $row->photo }}"
                                                    class="attachment-eventalk-size6 size-eventalk-size6 wp-post-image"
                                                    alt="">
                                                <div class="item-title">
                                                    <h3
                                                        class="title title-medium color-light hover-yellow size-sm">
                                                        <a
                                                            href="{{ route('site.speaker.show', urlencode($row->name)) }}">
                                                            {{ $row->name }}
                                                        </a>
                                                    </h3>
                                                    <div
                                                        class="text-left title-light size-md color-light">
                                                        <small>{{ $row->function }} <br>
                                                            <b>{{ $row->company }}</b></small>
                                                    </div>


                                                </div>
                                                <div class="item-social">
                                                    <ul>
                                                        <li><a
                                                                href="{{ route('site.speaker.show', urlencode($row->name)) }}">
                                                                <i class="fa fa-link"
                                                                    aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach



                            </div>
                            <div class="rt-el-speaker-grid-3 row mx-auto">

                                @foreach ($speakers as $row)
                                    @if ($row->id <= 4)
                                        <div
                                            class="rtin-item col-lg-3 col-md-6 col-12">
                                            <div class="speaker-layout3">
                                                <img width="400" height="400"
                                                    src="/storage/{{ $row->photo }}"
                                                    class="attachment-eventalk-size6 size-eventalk-size6 wp-post-image"
                                                    alt="">
                                                <div class="item-title">
                                                    <h3
                                                        class="title title-medium color-light hover-yellow size-sm">
                                                        <a
                                                            href="{{ route('site.speaker.show', urlencode($row->name)) }}">
                                                            {{ $row->name }}
                                                        </a>
                                                    </h3>
                                                    <div
                                                        class="text-left title-light size-md color-light">
                                                        <small>{{ $row->function }} <br>
                                                            <b>{{ $row->company }}</b></small>
                                                    </div>


                                                </div>
                                                <div class="item-social">
                                                    <ul>
                                                        <li><a
                                                                href="{{ route('site.speaker.show', urlencode($row->name)) }}">
                                                                <i class="fa fa-link"
                                                                    aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END ORADORES-->

    <!-- ORADORES-->

    <div class="elementor-section elementor-top-section elementor-element elementor-element-7cb28d8a elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default my-5 py-5"
        data-id="7cb28d8a" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1edeeb8f"
                data-id="1edeeb8f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-793bfde4 elementor-widget elementor-widget-rt-title"
                        data-id="793bfde4" data-element_type="widget"
                        data-widget_type="rt-title.default">
                        <div class="elementor-widget-container">
                            <div
                                class="rt-el-title section-heading title-black color-dark text-center style1">
                                <h2 class="rtin-title">Oradores</h2>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5cb6e841 elementor-widget elementor-widget-rt-speaker-grid"
                        data-id="5cb6e841" data-element_type="widget"
                        data-widget_type="rt-speaker-grid.default">
                        <div class="elementor-widget-container">
                            <div class="rt-el-speaker-grid-3 row">

                                @foreach ($speakers as $row)
                                    @if ($row->id > 4 && $row->id < 8)
                                        <div
                                            class="rtin-item col-lg-4 col-md-6 col-12">
                                            <div class="speaker-layout3">
                                                <img width="400" height="400"
                                                    src="/storage/{{ $row->photo }}"
                                                    class="attachment-eventalk-size6 size-eventalk-size6 wp-post-image"
                                                    alt="">
                                                <div class="item-title">
                                                    <h3
                                                        class="title title-medium color-light hover-yellow size-sm">
                                                        <a
                                                            href="{{ route('site.speaker.show', urlencode($row->name)) }}">
                                                            {{ $row->name }}
                                                        </a>
                                                    </h3>
                                                    <div
                                                        class="text-left title-light size-md color-light">
                                                        <small>{{ $row->function }} <br>
                                                            <b>{{ $row->company }}</b></small>
                                                    </div>


                                                </div>
                                                <div class="item-social">
                                                    <ul>
                                                        <li><a
                                                                href="{{ route('site.speaker.show', urlencode($row->name)) }}">
                                                                <i class="fa fa-link"
                                                                    aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>



@endsection
