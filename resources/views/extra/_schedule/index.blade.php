<section id="expositores"
    class="elementor-section elementor-top-section elementor-element elementor-element-77b8eec1 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="77b8eec1" data-element_type="section"
    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1dafdd8c"
            data-id="1dafdd8c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-44c92771 elementor-widget elementor-widget-rt-title"
                    data-id="44c92771" data-element_type="widget" data-widget_type="rt-title.default">
                    <div class="elementor-widget-container">
                        <div class="rt-el-title section-heading title-black color-light text-center style1">
                            <h2 class="rtin-title">Expositores</h2>
                            <div class="rtin-subtitle">
                                <p>Acompanhe a nossa lista de expositores
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-609beca7 elementor-widget elementor-widget-rt-event"
                    data-id="609beca7" data-element_type="widget" data-widget_type="rt-event.default">
                    <div class="elementor-widget-container">
                        <div class="schedule-layout-wrp">
                            <div class="schedule-wrapper-8">

                                <div class="schedule-item-8">
                                    @foreach ($ehibitor as $item)
                                        <div class="schedule-contnet-mid">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-12">
                                                    <div class="schedule-time">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="peaker-new-wrps">
                                                        <h3 class="schedule-title">
                                                            {{ $item->title }}

                                                        </h3>





                                                    </div>
                                                    <div class="details-txt tex-center">
                                                        <p>{!! html_entity_decode($item->description) !!}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-12">
                                                    <div class="speaker-details-wrp details-info">

                                                        <a class="details-down" href="#">Detalhes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>



                            </div>

                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
</section>
