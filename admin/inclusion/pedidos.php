<style>
    ul.dtr-details {
    width: 100%;
    height: 100%;
    display: flex!important;
    flex-wrap: wrap;
    justify-content: start;
}
ul.dtr-details li {
    padding: 15px!important;
    margin: 1px;
    width: initial;
}

</style>
<link href='plugins/datatables/datatables.min.css' rel='stylesheet' />
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- DataTable -->
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h4>Administración de pedidos</h4>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Número de Orden</th>
                                    <th>Nombre</th>
                                    <th>Cantidad de Trámites</th>
                                    <th>Velocidad Trámite</th>
                                    <th>Tipo de Visa</th>
                                    <th>Tipo de Trámite</th>                                   
                                    <th>Nacionalidad</th>
                                    <th>Status</th>
                                    <th>Pasaporte</th>
                                    <th>Teléfono</th>
                                    <th>Celular</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Colonia</th>
                                    <th>Código postal</th>
                                    <th>Estado</th>
                                    <th>Ciudad</th>
                                    <th>E-Mail</th>
                                    <th>Viaja por</th>
                                    <th id="descripcion" >Descripción</th>
                                    <th>Costo Unitario</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>                              
                               
                                <tr>
                                    <td>0123659878</td>
                                    <td>Jackson Bradshaw</td>
                                    <td>1</td>
                                    <td>Normal</td>
                                    <td>Turismo (B1/B2)</td>
                                    <td>Visa Nueva</td>
                                    <td>México</td>
                                    <td><span class="badge badge-pill bg-primary">Pendiente</span></td>
                                    <td>1123456789789</td>
                                    <td>02512732840</td>
                                    <td>+5804245034999</td>
                                    <td>2008/09/26</td>
                                    <td>La Castellana</td>
                                    <td>30015</td>
                                    <td>Lara</td>
                                    <td>Barquisimeto</td>
                                    <td>peraza@outlook.com</td>
                                    <td>Avión</td>
                                    <td >Solicitud de Visa Turismo (B1/B2) - Visa Nueva</td>
                                    <td>$ 104.58</td>
                                    <td>$ 104.58</td>
                                    <td><a class="btn btn-info" href="admin/orden?id_orden=1"><i class="fa fa-print"></i> IMPRIMIR</a></td>
                                </tr>                         
                               
                               <tr>
                                   <td>0123659878</td>
                                   <td>Jackson Bradshaw</td>
                                   <td>1</td>
                                   <td>Normal</td>
                                   <td>Turismo (B1/B2)</td>
                                   <td>Visa Nueva</td>
                                   <td>México</td>
                                   <td><span class="badge badge-pill bg-success">Pagado</span></td>
                                   <td>1123456789789</td>
                                   <td>02512732840</td>
                                   <td>+5804245034999</td>
                                   <td>2008/09/26</td>
                                   <td>La Castellana</td>
                                   <td>30015</td>
                                   <td>Lara</td>
                                   <td>Barquisimeto</td>
                                   <td>peraza@outlook.com</td>
                                   <td>Avión</td>
                                   <td >Solicitud de Visa Turismo (B1/B2) - Visa Nueva</td>
                                   <td>$ 104.58</td>
                                   <td>$ 104.58</td>
                                   <td><a class="btn btn-info" href="admin/orden?id_orden=1"><i class="fa fa-print"></i> IMPRIMIR</a></td>
                               </tr>                     
                               
                     
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Número de Orden</th>
                                    <th>Nombre</th>
                                    <th>Cantidad de Trámites</th>
                                    <th>Velocidad Trámite</th>
                                    <th>Tipo de Visa</th>
                                    <th>Tipo de Trámite</th>                                   
                                    <th>Nacionalidad</th>
                                    <th>Status</th>
                                    <th>Pasaporte</th>
                                    <th>Teléfono</th>
                                    <th>Celular</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Colonia</th>
                                    <th>Código postal</th>
                                    <th>Estado</th>
                                    <th>Ciudad</th>
                                    <th>E-Mail</th>
                                    <th>Viaja por</th>
                                    <th>Descripción</th>
                                    <th>Costo Unitario</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>

    <!--Datatables plugin files-->
    <script src='plugins/datatables/datatables.min.js'></script>
    <script>
        $('#datatable').DataTable({
            responsive: true
        });
    </script>