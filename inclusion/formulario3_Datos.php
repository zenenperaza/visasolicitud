<!-- inicio ROW -->
                            <div class="card">
                                <div class="card-body">
                                    <!--Wizard 7-->
                                    <form id="wizard7" class="wizard needs-validation" data-style="1" novalidate>
                                        <!--Step 1-->
                                        <h3>Tipo de Servicio</h3>
                                        <div class="wizard-content">
                                            <div class="h5 mb-4">Please fill with your account details</div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="gender">Solicitud</label>
                                                        <select class="form-select" name="gender" required>
                                                            <option value="">Selecciona un tipo</option>
                                                            <option>Turismo (B1/B2)</option>
                                                            <option>Negocios (B1/B2)</option>
                                                            <option>Estudiante (F y M)</option>
                                                            <option>Prensa y Medios (I)</option>
                                                            <option>Intercambio acàdemico (J)</option>
                                                            <option>Negocios (B1/B2)</option>
                                                            <option>Profesiones Religiosas (R1)</option>
                                                            <option>Tripulaciòn Comercial o Tripulantes de vuelo (C1/D)</option>
                                                            <option>Empleo basado en petición (H, L, O, P) </option>
                                                            <option>Empleada (os) Domésticas (os) (B1)</option>
                                                            <option>Comerciantes (E-1)</option>
                                                            <option>Inversionistas (E-2)</option>
                                                            <option>Miembros de Organizaciones Internacionales (G)</option>
                                                            <option>Diplomáticos y Empleados Federales Gobierno Mexicano (A)</option>
                                                            <option>NAFTA (TN)</option>
                                                            <option>Otro tipo</option>
                                                            
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="gender">Tipo</label>
                                                        <select class="form-select" name="TipoVisa">
                                                            <option value="">Seleccione...</option>
                                                            <option>Visa Nueva</option>
                                                            <option>Renovar Visa</option>
                                                            
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                        </div>
                                        <!--end: Step 1-->
                                        <!--Step 4-->
                                        <h3>Confirmation</h3>
                                        <div class="wizard-content">
                                            <div class="h5 mb-4">Iniciara su trámite de Visa Nueva Turismo</div>
                                                 <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Confirme si está de acuerdo con los términos y condiciones vigentes del sitio, asi como las políticas de privacidad actuales.</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">

                                                    <?php include("inclusion/terminos.php"); ?>
                                                    </textarea>
                                                 </div>


                                            
                                            <div class="form-check mb-1 mt-5">
                                                <input type="checkbox" name="reminders" id="reminders" class="form-check-input">
                                                <label class="custom-control-label" for="reminders">He leído y acepto los Términos y Condiciones vigentes del sitio.</label>
                                            </div>
                                         
                                        </div>
                                            <!--end: Step 4-->
                                        <!--Step 2-->
                                        <h3>Datos </h3>
                                        <div class="wizard-content">
                                            <div class="h5 mb-4">Registro para Trámite de Visa Americana
                                            <p>Rellene de forma correctamente el siguiente registro. Con este generara su cuenta para poder verificar su Trámite y añadir más registros.</p>
                                            </div>
                                            

                                            
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label for="name">Nombre:</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre(s)">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="surname">Apellido</label>
                                                    <input type="text" class="form-control" name="surname" placeholder="Ingresa tus Apellidos">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Fecha de Nacimiento:</label>
                                                    <input class="form-control" type="date" name="dateofbirth">
                                                </div>
                                            
                                                <div class="form-group col-md-6">
                                                    <label for="address2">Nacionalidad:</label>
                                                    <input type="text" class="form-control" name="Nacionalidad" placeholder="Ingresa tu Nacionalidad">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="address2">Número de Pasaporte:</label>
                                                    <input type="text" class="form-control" name="Ingresa Número de Pasaporte" placeholder="Número de Pasaporte">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="telephone">Teléfono #1</label>
                                                    <input class="form-control" type="tel" name="Teléfono" placeholder="Ingresa tu Número de Teléfono">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="telephone">Teléfono #2</label>
                                                    <input class="form-control" type="tel" name="Teléfono 2" placeholder="Ingresa tu Número de Teléfono">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress" class="form-label">Dirección</label>
                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Ingresa Dirección">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="form-label">Colonia</label>
                                                    <input type="text" class="form-control" id="inputCity" placeholder="Ingresa Colonia">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputZip" class="form-label">Código Postal</label>
                                                    <input type="text" class="form-control" id="inputZip" placeholder="Ingresa Código Postal">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="form-label">Estado</label>
                                                    <input type="text" class="form-control" id="inputEstado" placeholder="Ingresa Estado">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputZip" class="form-label">Ciudad</label>
                                                    <input type="text" class="form-control" id="inputCiudas" placeholder="Ingresa Ciudad">
                                                </div>
                                            </div>
                                            <!-- Inicio separador -->
                                         
                                            <!-- Fin separador -->
                                            <div class="h5 mb-4"><br>
                                            <p>Su usuario de acceso será su e-mail, con el verificará su cuenta.
                                            (A este mismo se le enviara toda notificación).</p>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Correo</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Ingresa tu Correo">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="password">Password</label>
                                                    <div class="input-group show-hide-password">
                                                        <input class="form-control" name="password" placeholder="Enter password" type="password">
                                                        <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                                       <small id="emailHelp" class="form-text text-muted">Indique una contraseña superior a 6 caracteres.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                      <label for="password2">Confirma Password</label>
                                                    <div class="input-group show-hide-password">
                                                        <input class="form-control" name="password2" placeholder="Ingresa Password" type="password">
                                                        <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Viaja por</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Aire</option>
                                                           <option>Tierra</option>
                                                           <option>Mar</option>
                                                       </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Cantidad de Trámites</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>1</option>
                                                           <option>2</option>
                                                           <option>3</option>
                                                           <option>4</option>
                                                           <option>5</option>
                                                       </select>
                                                       <small id="emailHelp" class="form-text text-muted">Si necesita más trámites; dentro de su cuenta podra añadirlos.</small>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Velocidad Trámite</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Trámite Normal</option>
                                                           <option>Trámite Urgente</option>

                                                       </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Tipo de trámite</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Visa Nueva</option>
                                                           <option>Renovar Visa</option>
                                                       </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Velocidad Trámite</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Trámite Normal</option>
                                                           <option>Trámite Urgente</option>

                                                       </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Tipo de Visa</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                            <option value="">Selecciona un tipo</option>
                                                            <option>Turismo (B1/B2)</option>
                                                            <option>Negocios (B1/B2)</option>
                                                            <option>Estudiante (F y M)</option>
                                                            <option>Prensa y Medios (I)</option>
                                                            <option>Intercambio acàdemico (J)</option>
                                                            <option>Negocios (B1/B2)</option>
                                                            <option>Profesiones Religiosas (R1)</option>
                                                            <option>Tripulaciòn Comercial o Tripulantes de vuelo (C1/D)</option>
                                                            <option>Empleo basado en petición (H, L, O, P) </option>
                                                            <option>Empleada (os) Domésticas (os) (B1)</option>
                                                            <option>Comerciantes (E-1)</option>
                                                            <option>Inversionistas (E-2)</option>
                                                            <option>Miembros de Organizaciones Internacionales (G)</option>
                                                            <option>Diplomáticos y Empleados Federales Gobierno Mexicano (A)</option>
                                                            <option>NAFTA (TN)</option>
                                                            <option>Otro tipo</option>

                                                       </select>
                                                       
                                                </div>
                                            </div>


                                            </div>
                                        
                                        <!--end: Step 2-->
                                        <!--Step 3-->
                                        <h3>Mailing Address</h3>
                                        <div class="wizard-content">
                                            <div class="h5 mb-4">Mailing Address</div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Enter your Street Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address2">Address 2</label>
                                                    <input type="text" class="form-control" name="address2" placeholder="Enter your Apartment, studio, or floor">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="city">City</label>
                                                    <input type="text" class="form-control" name="city" placeholder="Enter your City">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Zip Code:</label>
                                                    <input type="number" class="form-control" name="zip" placeholder="Enter Zip Code">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">State</label>
                                                    <select name="state" class="form-select">
                                                    <option>Australia</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="country">Country</label>
                                                    <select name="country" class="form-select">
                                                    <option>United States</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Step 3-->
                                        
                                    </form>
                                    <!--end: Wizard 7-->
                                    </div>
                                </div>

<!-- fin row -->    