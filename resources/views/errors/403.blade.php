<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="403 Forbidden">
<meta name="author" content="">
<title>403 Forbidden</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
/* Error Page Inline Styles */
body {
  padding-top: 20px;
}
/* Layout */
.jumbotron {
  font-size: 21px;
  font-weight: 200;
  line-height: 2.1428571435;
  color: inherit;
  padding: 10px 0px;
}
/* Everything but the jumbotron gets side spacing for mobile-first views */
.masthead, .body-content, {
  padding-left: 15px;
  padding-right: 15px;
}
/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  background-color: transparent;
}
.jumbotron .btn {
  font-size: 21px;
  padding: 14px 24px;
}
/* Colors */
.green {color:#5cb85c;}
.orange {color:#f0ad4e;}
.red {color:#d9534f;}
</style>

</head>
<body>
<!-- Error Page Content -->
<div class="container">
<div class="jumbotron">
  <h1><i class="fa fa-ban red"></i> 403 Forbidden</h1>
  <p class="lead">¡Lo siento! No tienes permisos de acceso.</p>
    <p>
      <a href="/" class="btn btn-default btn-lg green">Ir a Dashboard</a>
    </p>
</div>
</div>
<div class="container">
  <div class="body-content">
    <div class="row">
      <div class="col-md-6">
        <h2>¿Que pasó?</h2>
        <p class="lead">Un error 403 indica que no tiene permiso para acceder al archivo o la página. En general, los servidores y sitios web tienen directorios y archivos que no están públicos por razones de seguridad.</p>
      </div>
      <div class="col-md-6">
        <h2>¿Qué puedo hacer?</h2>
        <p class="lead">Si eres un visitante del sitio</p>
        <p>Utilice el botón atrás de su navegador y verifique que se encuentra en el sitio correcto. Si necesita asistencia inmediata, envienos un correo electrónico.</p>
        <p class="lead">Si eres el propietario del sitio</p>
         <p>Verifique que se encuentre en el sitio correcto y comuníquese con el proveedor de su sitio web si cree que se trata de un error.</p>
     </div>
    </div>
  </div>
</div>
<!-- End Error Page Content -->
<!--Scripts-->
<!-- jQuery library -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
