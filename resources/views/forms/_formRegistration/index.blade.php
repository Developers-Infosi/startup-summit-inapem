<div class="container">
    <div class="row">

    <div class="col-4 col-md-4">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ isset($registration->name) ? $registration->name : old('name') }}"
                class="form-control border-secondary" placeholder="Nome" required>
        </div>
    </div> <!-- /.col -->



    <div class="col-4 col-md-4">
        <div class="form-group">
            <label for="payment">Email</label>
            <input type="text" name="email" id="site" value="{{ isset($registration->email) ? $registration->email : old('email') }}"
                class="form-control border-secondary" placeholder="Email" required>
        </div>
    </div> <!-- /.col -->




    <div class="col-4 col-md-4">
        <div class="form-group">
            <label for="payment">Telefone</label>
            <input type="text" name="tel" id="tel" value="{{ isset($registration->tel) ? $registration->tel : old('tel') }}"
                class="form-control border-secondary" placeholder="Telefone" required>
        </div>
    </div>


</div>
</div>

<style>
    @media (max-width: 576px) {
        .modal-content {
          width: 90%;
          max-height: 90%;
        }
      }

    </style>
