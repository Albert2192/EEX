<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Mi Perfil
                </div>
                <button type="button" class="btn btn-secondary btn-wave waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#nuevo_cliente" id="boton_cliente">Nuevo Cliente</button>
            </div>
            <div class="card-body">
                <!-- <table id="tabla"></table> -->
                <form class="row g-3 mt-0" id="formulario">
                    <div class="col-md-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" value="<?php echo $user->user_name; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Usuario</label>
                        <input type="text" class="form-control" value="<?php echo $user->nick; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" value="<?php echo $user->email; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="rol" class="form-label">Rol</label>
                        <input type="text" class="form-control" value="<?php echo $user->rol; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="pais" class="form-label">Pais</label>
                        <input type="text" class="form-control" value="<?php echo $user->pais; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" value="<?php echo $user->ciudad; ?>" readonly>
                    </div>
                    <div class="col-12">
                        <p class="h6 mb-3">Cambio de contraseña.</p>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="Password">
                        <small id="emailHelp" class="form-text text-muted">Debe contener al menos 6 dígitos. Pueden ser numeros, letras y caracteres especiales.</small>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword" class="form-label">Repite Contraseña</label>
                        <input type="password" class="form-control" id="rePassword">
                        <small id="emailHelp" class="form-text text-muted">Repita su contaseña tal cual la escribio.</small>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success me-md-2 btn-wave waves-effect waves-light" type="submit" id="guardar">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="nuevo_cliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo_Modal">Agregar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 mt-0" action="cargar">
                    <input type="hidden" id="id_cliente">
                    <div class="col-md-4">
                        <label class="form-label">C.I. o R.U.C.</label>
                        <input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingrese su C.I. o RUC">
                    </div>
                    <div class="col-md-8">
                        <label class="form-label">Nombre o Razón Social</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email">
                    </div>
                    <div class="col-md-4">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono">
                    </div>
                    <div class="col-md-4">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese su celular">
                    </div>
                    <div class="col-md-12">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su dirección">
                    </div>
                    <div class="col-md-12">
                        <label for="obs" class="form-label">Observación</label>
                        <textarea class="form-control" id="obs" name="obs" rows="3"></textarea>
                        <small id="emailHelp" class="form-text text-muted">Puede incluir cualquier reseña o dato importante sobre el cliente.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-wave waves-effect waves-light" id="cancelar" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-success me-md-2 btn-wave waves-effect waves-light" type="submit" id="guardar" form="formulario">Guardar</button>
                <button class="btn btn-success me-md-2 btn-wave waves-effect waves-light d-none" type="submit" id="editar" form="formulario">Editar</button>
            </div>
        </div>
    </div>
</div>

<!-- <button id="probar">Probar</button> -->

<!-- ALERTA SUCCESS -->
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="alert_success" class="toast colored-toast bg-success text-fixed-white fade hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-fixed-white">
            <img class="bd-placeholder-img rounded me-2" src="<?php echo url(); ?>images/icon/favicon.png" alt="logo">
            <strong class="me-auto">Correcto</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body message_success">
            Your,toast message here.
        </div>
    </div>
</div>

<!-- ALERTA DANGER -->
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="alert_danger" class="toast colored-toast bg-danger text-fixed-white fade hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-danger text-fixed-white">
            <img class="bd-placeholder-img rounded me-2" src="<?php echo url(); ?>images/icon/favicon.png" alt="logo">
            <strong class="me-auto">Error</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body message_danger">
            Your,toast message here.
        </div>
    </div>
</div>

<div id="contenedor_option" class="contenedor_option">
    <div id="contenedor_mensaje" class="contenedor_mensaje">
        <div class="text-center px-5 pb-0">
            <svg class="custom-alert-icon svg-warning" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"></path>
            </svg>
            <h5>Atención</h5>
            <p class="">Desea Eliminar al cliente <span id="cliente_eliminacion"></span>.</p>
            <div class="">
                <button id="cancelar_eliminacion" class="btn btn-sm btn-outline-secondary m-1">Cancelar</button>
                <button id="aceptar_eliminacion" class="btn btn-sm btn-danger m-1">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo url(); ?>js/pages/perfil.js?v=<?php echo $v; ?>"></script>