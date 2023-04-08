<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solicitud de Seguro</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <?php include 'header.php'; ?>

    <h1>Solicitud de Seguro</h1>
    <form method="POST" action="procesa_solicitud.php">
    <h2>Datos del asegurado</h2>
    <div class="form-group">
        <label for="nombre_asegurado">Nombre</label>
        <input type="text" class="form-control" id="nombre_asegurado" name="nombre_asegurado" required>
    </div>
    <div class="form-group">
        <label for="apellido_asegurado">Apellido</label>
        <input type="text" class="form-control" id="apellido_asegurado" name="apellido_asegurado" required>
    </div>
    <div class="form-group">
        <label for="fecha_nacimiento_asegurado">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento_asegurado" name="fecha_nacimiento_asegurado" required>
    </div>
    <div class="form-group">
        <label for="genero_asegurado">Género</label>
        <select class="form-control" id="genero_asegurado" name="genero_asegurado" required>
            <option value="">Seleccionar</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
    </div>
    <div class="form-group">
        <label for="estado_civil_asegurado">Estado civil</label>
        <select class="form-control" id="estado_civil_asegurado" name="estado_civil_asegurado" required>
            <option value="">Seleccionar</option>
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viudo">Viudo</option>
        </select>
    </div>
    <div class="form-group">
        <label for="correo_asegurado">Correo electrónico</label>
        <input type="email" class="form-control" id="correo_asegurado" name="correo_asegurado" required>
    </div>
    <div class="form-group">
        <label for="telefono_asegurado">Teléfono</label>
        <input type="tel" class="form-control" id="telefono_asegurado" name="telefono_asegurado" required>
    </div>

    <h2>Datos del beneficiario</h2>
    <div class="form-group">
        <label for="nombre_beneficiario">Nombre</label>
        <input type="text" class="form-control" id="nombre_beneficiario" name="nombre_beneficiario" required>
    </div>
    <div class="form-group">
        <label for="apellido_beneficiario">Apellido</label>
        <input type="text" class="form-control" id="apellido_beneficiario" name="apellido_beneficiario" required>
    </div>
    <div class="form-group">
    <label for="fecha_nacimiento_beneficiario">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimiento_beneficiario" name="fecha_nacimiento_beneficiario" required>
</div>
<div class="form-group">
    <label for="genero_beneficiario">Género</label>
    <select class="form-control" id="genero_beneficiario" name="genero_beneficiario" required>
        <option value="">Seleccionar</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
    </select>
</div>
<div class="form-group">
    <label for="estado_civil_beneficiario">Estado civil</label>
    <select class="form-control" id="estado_civil_beneficiario" name="estado_civil_beneficiario" required>
        <option value="">Seleccionar</option>
        <option value="soltero">Soltero(a)</option>
        <option value="casado">Casado(a)</option>
        <option value="divorciado">Divorciado(a)</option>
        <option value="viudo">Viudo(a)</option>
    </select>
</div>
<div class="form-group">
    <label for="correo_beneficiario">Correo electrónico</label>
    <input type="email" class="form-control" id="correo_beneficiario" name="correo_beneficiario" required>
</div>
<div class="form-group">
    <label for="telefono_beneficiario">Teléfono</label>
    <input type="tel" class="form-control" id="telefono_beneficiario" name="telefono_beneficiario" required>
</div>
<h3>Información del seguro</h3>
<div class="form-group">
    <label for="tipo_seguro">Tipo de seguro</label>
    <select class="form-control" id="tipo_seguro" name="tipo_seguro" required>
        <option value="">Seleccionar</option>
        <option value="vida">Vida</option>
        <option value="auto">Auto</option>
        <option value="hogar">Hogar</option>
    </select>
</div>
<div class="form-group">
    <label for="monto_cobertura">Monto de cobertura</label>
    <input type="number" class="form-control" id="monto_cobertura" name="monto_cobertura" required>
</div>
<div class="form-group">
    <label for="plan_pago">Plan de pago</label>
    <select class="form-control" id="plan_pago" name="plan_pago" required>
        <option value="">Seleccionar</option>
        <option value="mensual">Mensual</option>
        <option value="trimestral">Trimestral</option>
        <option value="semestral">Semestral</option>
        <option value="anual">Anual</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php include 'footer.php'; ?>

</body>
</html>