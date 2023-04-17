<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="theme">Tema</label>
        <input type="text" name="theme" id="theme"
            value="{{ isset($schedule->theme) ? $schedule->theme : old('theme') }}" class="form-control border-secondary"
            placeholder="Tema" required>
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="program">Programa</label>
        <input type="text" name="program" id="program"
            value="{{ isset($schedule->program) ? $schedule->program : old('program') }}"
            class="form-control border-secondary" placeholder="Programa" required>
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="day">Dia do Evento</label>
        <select name="day" id="day" class="form-control" required>
            @if (isset($schedule->day))
                <option value="{{ $schedule->day }}" class="text-primary h6" selected>
                    {{ $schedule->day }}
                </option>
            @else
                <option disabled selected>Selecione o dia do evento</option>
            @endif

            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>


        </select>
    </div>

</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="start">Data de Início</label>
        <input type="datetime-local" name="start" id="start"
            value="{{ isset($schedule->start) ? date('Y-m-d\TH:i:s', strtotime($schedule->start)) : old('start') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="end">Data de Termino</label>
        <input type="datetime-local" name="end" id="end"
            value="{{ isset($schedule->end) ? date('Y-m-d\TH:i:s', strtotime($schedule->end)) : old('end') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6">
    <div class="form-group">
        <label for="speaker">Orador</label>
        <input type="text" name="speaker" id="speaker"
            value="{{ isset($schedule->speaker) ? $schedule->speaker : old('speaker') }}"
            class="form-control border-secondary" placeholder="Oradores">
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title"
            value="{{ isset($schedule->title) ? $schedule->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo">
    </div>
</div> <!-- /.col -->
