<div class="container">
    <div class="row">
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">Adcionar Pagamento</label>
            <input type="file" name="payment" id="payment" value="{{ isset($registration->payment) ? $registration->payment : old('payment') }}"
                class="form-control border-secondary" placeholder="Titulo" required>
        </div>
    </div> <!-- /.col -->

    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="company_name">Nome da empresa</label>
            <input type="text" name="company_name" id="company_name" value="{{ isset($registration->company_name) ? $registration->company_name : old('company_name') }}"
                class="form-control border-secondary" placeholder="Nome da empresa" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="fax">FAX</label>
            <input type="text" name="fax" id="fax" value="{{ isset($registration->fax) ? $registration->fax : old('fax') }}"
                class="form-control border-secondary" placeholder="FAX" required>
        </div>
    </div> <!-- /.col -->

    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">Morada</label>
            <input type="text" name="address" id="address" value="{{ isset($registration->address) ? $registration->address : old('address') }}"
                class="form-control border-secondary" placeholder="Morada" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="phone">Telemóvel</label>
            <input type="text" name="phone" id="phone" value="{{ isset($registration->phone) ? $registration->phone : old('phone') }}"
                class="form-control border-secondary" placeholder="Telemóvel" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">Código postal</label>
            <input type="text" name="postal_code" id="postal_code" value="{{ isset($registration->postal_code) ? $registration->postal_code : old('postal_code') }}"
                class="form-control border-secondary" placeholder="Código postal" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">Pessoa a contactar</label>
            <input type="text" name="contact_person" id="contact_person" value="{{ isset($registration->contact_person) ? $registration->contact_person : old('contact_person') }}"
                class="form-control border-secondary" placeholder="Pessoa a contactar" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">Localidade</label>
            <input type="text" name="city" id="city" value="{{ isset($registration->city) ? $registration->city : old('city') }}"
                class="form-control border-secondary" placeholder="Localidade" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">Sector de actividade</label>
            <input type="text" name="industry_sector" id="industry_sector" value="{{ isset($registration->industry_sector) ? $registration->industry_sector : old('industry_sector') }}"
                class="form-control border-secondary" placeholder="Sector de actividade" required>
        </div>
    </div> <!-- /.col -->
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="nif">Número de contrinuinte(NIF)</label>
            <input type="text" name="nif" id="nif" value="{{ isset($registration->nif) ? $registration->nif : old('nif') }}"
                class="form-control border-secondary" placeholder="Número de contrinuinte(NIF)" required>
        </div>
    </div> <!-- /.col -->
       <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="exhibition_product">Producto em exposição</label>
            <input type="text" name="exhibition_product" id="exhibition_product" value="{{ isset($registration->exhibition_product) ? $registration->exhibition_product : old('exhibition_product') }}"
                class="form-control border-secondary" placeholder="Producto em exposição" required>
        </div>
    </div> <!-- /.col -->


    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="payment">País</label>
            <input type="text" name="country" id="country" value="{{ isset($registration->country) ? $registration->country : old('country') }}"
                class="form-control border-secondary" placeholder="País" required>
        </div>
    </div> <!-- /.col -->



    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ isset($registration->email) ? $registration->email : old('email') }}"
                class="form-control border-secondary" placeholder="Email" required>
        </div>
    </div> <!-- /.col -->


    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="payment">Número de telefone</label>
            <input type="text" name="phone_number" id="payment" value="{{ isset($registration->phone_number) ? $registration->payment : old('phone_number') }}"
                class="form-control border-secondary" placeholder="Número de telefone" required>
        </div>
    </div> <!-- /.col -->

    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="payment">Site</label>
            <input type="text" name="site" id="site" value="{{ isset($registration->site) ? $registration->site : old('site') }}"
                class="form-control border-secondary" placeholder="Site" required>
        </div>
    </div> <!-- /.col -->


</div>
</div>
