@extends('layouts.merge.site')
@section('titulo', 'Orador')
@section('content')

    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Detalhes: {{ $speaker->name }}</h1>

                        <div class="breadcrumb-area">
                            <div class="entry-breadcrumb">
                                <!-- Breadcrumb NavXT 7.1.0 -->
                                <span property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" title="Oradores" href="{{ route('site.speaker') }}"
                                        class="home">
                                        <span property="name">Oradores</span>
                                    </a>
                                    <meta property="position" content="1">
                                </span>
                                &gt;
                                <span property="itemListElement" typeof="ListItem">
                                    <span property="name">
                                        Detalhes: {{ $speaker->name }}
                                    </span>
                                    <meta property="position" content="2">
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area">
            <div class="container">
                <div class="row py-5 my-5">
                    <div class="col-sm-12 col-xs-12">
                        <main id="main" class="site-main">
                            <div id="post-380"
                                class="team-single-2 post-380 eventalk_speaker type-eventalk_speaker status-publish has-post-thumbnail hentry eventalk_speaker_category-category-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="single-speaker-holder">
                                            <div class="single-speaker-img">
                                                <img width="400" height="400" src="/storage/{{ $speaker->photo }}"
                                                    class="attachment-eventalk-size4 size-eventalk-size4 wp-post-image">
                                            </div>
                                            <div class="single-speaker-designation">
                                                <h3>{{ $speaker->name }}</h3>
                                                <p>
                                                    {{ $speaker->function }} <br>
                                                    {{ $speaker->company }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div class="speaker-profile">
                                            <h3 class="content-title">Biografia </h3>
                                            <div data-elementor-type="wp-post" data-elementor-id="380"
                                                class="elementor elementor-380">
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-557af06 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="557af06" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-646b9c3"
                                                            data-id="646b9c3" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-c9297c7 elementor-drop-cap-yes elementor-drop-cap-view-default elementor-widget elementor-widget-text-editor"
                                                                    data-id="c9297c7" data-element_type="widget"
                                                                    data-settings="{&quot;drop_cap&quot;:&quot;yes&quot;}"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container text-justify">
                                                                        <p class="text-dark">{!! html_entity_decode($speaker->description) !!}</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
