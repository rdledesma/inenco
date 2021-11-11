@extends('layouts.main')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12">
            <p>Sede Salta Capital</p>
            <p>
                Departamento de Física, Facultad de Cs. Exáctas, Universidad Nacional de Salta.
                Av. Bolivia, CP 4400, Salta, Argentina.
                Tel: +59827110905
            </p>



            <h4>Enviar email</h4>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nosotros no compartiremos tu correo con nadie</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                  <textarea class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
              </form>


        </div>
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d538.7037693135063!2d-65.40955891499512!3d-24.728509302568174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc1141c467c7d%3A0x8f1116f7c4a76c86!2sFacultad%20de%20Ciencias%20Exactas%20-%20UNSa!5e0!3m2!1ses-419!2sar!4v1636462432312!5m2!1ses-419!2sar" width="600"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        </div>


</div>
@endsection
