<div class="elementor-element elementor-element-3601825 elementor-widget elementor-widget-rt-event" data-id="3601825"
    data-element_type="widget" data-widget_type="rt-event.default">
    <div class="elementor-widget-container">
        <div class="schedule-layout-wrp">
            <div class="schedule-layout2">
                <ul class="schedule-nav nav nav-tabs row">
                    <li class="nav-item col-12 col-md-12 col-lg-4">
                        <a class="active" href="#schedule-20191201" data-toggle="tab" aria-expanded="false">
                            <div class="day-number">
                                Dia - 01</div>
                            <div class="schedule-date">
                                12-06-2023</div>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-12 col-lg-4">
                        <a class="" href="#schedule-20191202" data-toggle="tab" aria-expanded="false">
                            <div class="day-number">
                                Dia - 02</div>
                            <div class="schedule-date">
                                13-06-2023</div>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-12 col-lg-4">
                        <a class="" href="#schedule-20191203" data-toggle="tab" aria-expanded="true">
                            <div class="day-number">
                                Dia - 03</div>
                            <div class="schedule-date">
                                14-06-2023</div>
                        </a>
                    </li>

                </ul>
                <div class="schedule-content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="schedule-20191201"
                            aria-expanded="false">

                            <table class="table table-bordered table-responsive">
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
                                    @foreach ($schedulesI as $item)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>
                                                <b>{{ $item->theme }}: </b>{{ $item->program }}
                                            </td>

                                            <td>
                                                {{ date('H:i', strtotime($item->start)) }} -
                                                {{ date('H:i', strtotime($item->end)) }}
                                            </td>
                                            <td>
                                                {{ $item->room }}
                                            </td>
                                            <td>
                                                {!! html_entity_decode($item->speaker) !!}
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
