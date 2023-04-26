<div class="col-4 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="activity">Actividade </label>
        <input type="text" name="activity" id="activity"
            value="{{ isset($schedule->activity) ? $schedule->activity : old('activity') }}" class="form-control border-secondary"
            placeholder="Actividade" required>
    </div>


</div> <!-- /.col -->
<div class="col-4 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="conference">
            prelector

             </label>
        <input type="text" name="conference" id="conference"
            value="{{ isset($schedule->conference) ? $schedule->conference : old('conference') }}" class="form-control border-secondary"
            placeholder="Conferência" >
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="local">Local</label>
        <input type="text" name="local" id="local"
            value="{{ isset($schedule->local) ? $schedule->local : old('local') }}"
            class="form-control border-secondary" placeholder="local" required>
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



<div class="col-4 col-md-4 col-lg-4">
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
<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($schedule->description) ? $schedule->description : old('description') }}
            </textarea>
        </div>
    </div>
</div>
