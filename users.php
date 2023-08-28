<div class="row">
    <!-- <div class="col-xl-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Form grid
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address</label>
                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <input type="text" class="form-control" placeholder="Street" aria-label="Street">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <input type="text" class="form-control" placeholder="Landmark" aria-label="Landmark">
                            </div>
                            <div class="col-xxl-6 col-xl-12 mb-3">
                                <input type="text" class="form-control" placeholder="City" aria-label="City">
                            </div>
                            <div class="col-xxl-6 col-xl-12 mb-3">
                                <select id="inputState1" class="form-select">
                                    <option selected="">State</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-xxl-6 col-xl-12 mb-3">
                                <input type="text" class="form-control" placeholder="Postal/Zip code" aria-label="Postal/Zip code">
                            </div>
                            <div class="col-xxl-6 col-xl-12 mb-3">
                                <select id="inputCountry" class="form-select">
                                    <option selected="">Country</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email" aria-label="email">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">D.O.B</label>
                                <input type="date" class="form-control" aria-label="dateofbirth">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <div class="row">
                                    <label class="form-label mb-1">Maritial Status</label>
                                    <div class="col-xl-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="status-married" required="">
                                            <label class="form-check-label" for="status-married">
                                                Married
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="status-unmarried" required="">
                                            <label class="form-check-label" for="status-unmarried">
                                                Single
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="number" class="form-control" placeholder="Phone number" aria-label="Phone number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Alternative Contact</label>
                        <input type="number" class="form-control" placeholder="Phone number" aria-label="Phone number">
                    </div>
                    <div class="col-md-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Gestion de Usuarios
                </div>
            </div>
            <div class="card-body">
                <form class="row g-3 mt-0" id="formulario">
                    <div class="col-md-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre" aria-label="First name" name="nombre" id="nombre">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Usuario</label>
                        <input type="text" class="form-control" placeholder="Ingrese su nick" aria-label="Last name">
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rol" class="form-label">Rol</label>
                            <select class="form-control" id="rol">
                                <option>Todos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <!-- <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div> -->
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <!-- <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select form-select-lg">
                            <option selected="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div> -->
                    <!-- <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div> -->
                    <!-- <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck3">
                            <label class="form-check-label" for="gridCheck3">
                                Check me out
                            </label>
                        </div>
                    </div> -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <!-- <button class="btn btn-purple btn-wave waves-effect waves-light" type="button">Button</button> -->
                        <button class="btn btn-success me-md-2 btn-wave waves-effect waves-light" type="submit" id="guardar">Guardar</button>
                    </div>
                    <!-- <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div> -->

                    <!-- ALERT -->
                    <!-- <div class="alert alert-secondary alert-dismissible fade show custom-alert-icon shadow-sm myAlert" id="myAlert" role="alert">
                        <svg class="svg-secondary" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                        Usuario guardado exitosamente!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                    </div> -->
                    <!-- ALERT -->

                </form>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo url(); ?>js/pages/users.js?v=<?php echo $v; ?>"></script>