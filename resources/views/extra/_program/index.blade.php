<div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1dafdd8c"
        data-id="1dafdd8c" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-44c92771 elementor-widget elementor-widget-rt-title"
                data-id="44c92771" data-element_type="widget" data-widget_type="rt-title.default">
                <div class="elementor-widget-container">
                    <div class="rt-el-title section-heading title-black color-light text-center style1">
                        <h2 class="rtin-title">Programa</h2>
                        <div class="rtin-subtitle">
                            <p>Acompanhe a nossa lista de Programa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3601825 elementor-widget elementor-widget-rt-event"
                data-id="3601825" data-element_type="widget" data-widget_type="rt-event.default">


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
                                        <form action="{{ route('site.registration.store') }}" method="post"
                                            class="my-6 mt-6">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Selecionar Actividade</th>
                                                        <th>HORA</th>
                                                        <th>ACTIVIDADE</th>
                                                        <th>CONFERÊNCIA</th>
                                                        <th>LOCAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($schedulesI as $item)
                                                    <tr>
                                                        <th scope="row" class="text-center"><input
                                                                class="form-check-input" name="eventSelect[]"
                                                                value="{{ $item->id }}" type="checkbox"
                                                                id="flexCheckDefault"></th>
                                                        <td>
                                                            <b> {{ date('H:i', strtotime($item->start)) }}
                                                                -{{ date('H:i', strtotime($item->end)) }}
                                                        </td>

                                                        <td>
                                                            {{ $item->activity }}
                                                        </td>
                                                        <td>
                                                            {{ $item->conference }}
                                                        </td>
                                                        <td>
                                                            {{ $item->local }}
                                                        </td>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            <br>
                                            <p>Formulário do dia 01</p>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            @csrf
                                            @include('forms._formRegistration.index')
                                            <div class="form-group text-center">
                                                <button type="submit"
                                                    class="btn-fill size-xs color-green border-radius-5 gust">
                                                    Submeter
                                                    <span class="fe fe-chevron-right fe-16"></span>
                                                </button>

                                            </div>

                                        </form>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="schedule-20191202"
                                        aria-expanded="false">
                                        <form action="{{ route('site.registration.store') }}" method="post"
                                        class="my-6 mt-6">
                                        <table class="table table-bordered table-responsive">

                                            <thead>
                                                <tr>
                                                    <th>Selecionar Actividade</th>
                                                    <th>HORA</th>
                                                    <th>ACTIVIDADE</th>
                                                    <th>CONFERÊNCIA</th>
                                                    <th>LOCAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($schedulesII as $item)
                                                <tr>
                                                    <th scope="row" class="text-center"><input
                                                            class="form-check-input" name="eventSelect[]"
                                                            value="{{ $item->id }}" type="checkbox"
                                                            id="flexCheckDefault"></th>
                                                    <td>
                                                        <b> {{ date('H:i', strtotime($item->start)) }}
                                                            -{{ date('H:i', strtotime($item->end)) }}
                                                    </td>

                                                    <td>
                                                        {{ $item->activity }}
                                                    </td>
                                                    <td>
                                                        {{ $item->conference }}
                                                    </td>
                                                    <td>
                                                        {{ $item->local }}
                                                    </td>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        <p>Formulário do dia 02</p>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @csrf
                                        @include('forms._formRegistration.index')
                                        <div class="form-group text-center">
                                            <button type="submit"
                                                class="btn-fill size-xs color-green border-radius-5 gust">
                                                Submeter
                                                <span class="fe fe-chevron-right fe-16"></span>
                                            </button>

                                        </div>

                                    </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="schedule-20191203"
                                        aria-expanded="true">
                                        <form action="{{ route('site.registration.store') }}" method="post"
                                        class="my-6 mt-6">
                                        <table class="table table-bordered table-responsive">

                                            <thead>
                                                <tr>
                                                    <th>Selecionar Actividade</th>
                                                    <th>HORA</th>
                                                    <th>ACTIVIDADE</th>
                                                    <th>CONFERÊNCIA</th>
                                                    <th>LOCAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($schedulesIII as $item)
                                                <tr>
                                                    <th scope="row" class="text-center"><input
                                                            class="form-check-input" name="eventSelect[]"
                                                            value="{{ $item->id }}" type="checkbox"
                                                            id="flexCheckDefault"></th>
                                                    <td>
                                                        <b> {{ date('H:i', strtotime($item->start)) }}
                                                            -{{ date('H:i', strtotime($item->end)) }}
                                                    </td>

                                                    <td>
                                                        {{ $item->activity }}
                                                    </td>
                                                    <td>
                                                        {{ $item->conference }}
                                                    </td>
                                                    <td>
                                                        {{ $item->local }}
                                                    </td>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <br>
                                        <p>Formulário do dia 03</p>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @csrf
                                        @include('forms._formRegistration.index')
                                        <div class="form-group text-center">
                                            <button type="submit"
                                                class="btn-fill size-xs color-green border-radius-5 gust">
                                                Submeter
                                                <span class="fe fe-chevron-right fe-16"></span>
                                            </button>

                                        </div>

                                    </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>





        </div>
    </div>
</div>
