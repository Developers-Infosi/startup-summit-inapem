
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Empresa</label>
        <input type="text" name="title" id="title" value="{{ isset($ehibitor->title) ? $ehibitor->title : old('title') }}"
            class="form-control border-secondary" placeholder="Empresa" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="product">Produto</label>
        <input type="text" name="product" id="product" value="{{ isset($ehibitor->product) ? $ehibitor->product : old('product') }}"
            class="form-control border-secondary" placeholder="Produto" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Sector de Actividade</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($ehibitor->description) ? $ehibitor->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
