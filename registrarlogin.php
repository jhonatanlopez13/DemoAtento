<div class="hpanel">
                <div class="panel-body">
                    <form action="../../controller/admin/insertarUsuario.php" id="loginForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Identificacion</label>
                                <input type="number" name="identificacion" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Apellido</label>
                                <input type="text" name="apellido" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Telefono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Whatsapp</label>
                                <input type="text" name="whatsapp" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Cargo</label>
                                <!-- <input type="text" name="cargo" class="form-control"> -->
                                <select class="form-control select2" name="cargo" required>
                                    <option selected>Selecione su perfil</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="coordinador">Coordinadora</option>
                                    <option value="bodeguero">Bodeguero</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de ingreso</label>
                                <input type="date" name="fecha_ingreso" class="form-control" required>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contraseña</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn">REGISTRAR</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>