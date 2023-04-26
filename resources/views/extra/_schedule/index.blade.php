<div class="elementor-element elementor-element-3601825 elementor-widget elementor-widget-rt-event" data-id="3601825"
    data-element_type="widget" data-widget_type="rt-event.default">
    <div class="elementor-widget-container">
        <div class="schedule-layout-wrp">
            <div class="schedule-layout2">

                <div class="schedule-content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="schedule-20191201"
                            aria-expanded="false">


                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-fixed table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Empresa</th>
                                        <th>Sector de Actividade</th>
                                        <th>Produtos</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($ehibitor as $item)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>
                                                <b>{{ $item->title }}
                                            </td>

                                            <td>
                                                {!! html_entity_decode($item->description) !!}
                                            </td>

                                            <td>
                                                {{$item->product}}
                                            </td>



                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>




                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
