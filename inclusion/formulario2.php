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
                                            <br>
                                            <br>
                                            <a href="#" class="btn btn-outline btn-dark"><span>Iniciar Solicitud</span></a>
                                            </div>
                                         
                                        </div>
                                            <!--end: Step 4-->

                                        
                                        
                                    </form>
                                    <!--end: Wizard 7-->
                                    </div>
                                </div>

<!-- fin row -->    