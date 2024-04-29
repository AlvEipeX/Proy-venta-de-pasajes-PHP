let tblEmpleados;
let tblSurubies;
let tblRutas;
let tblPasajeros;
let tblViajes;
let tblPasajes;

document.addEventListener("DOMContentLoaded", function () {
    tblViajes = $('#tblViajes').DataTable({
        ajax: {
            url: base_url + "Viajes/listar",
            dataSrc: ''
        },
        columns: [
            { 'data': 'cod_viaje' },
            { 'data': 'cod_surubi' },
            { 'data': 'cod_ruta' },
            { 'data': 'acciones1' },
            { 'data': 'acciones2' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success btn-lg"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger btn-lg"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
})


document.addEventListener("DOMContentLoaded", function () {
    tblEmpleados = $('#tblEmpleados').DataTable({
        ajax: {
            url: base_url + "Empleados/listar",
            dataSrc: ''
        },
        columns: [
            { 'data': 'cod_emp' },
            { 'data': 'ci_emp' },
            { 'data': 'nom_emp' },
            { 'data': 'app_emp' },
            { 'data': 'apm_emp' },
            { 'data': 'fecnac_emp' },
            { 'data': 'cargo' },
            { 'data': 'acciones' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success btn-lg"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger btn-lg"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
})

document.addEventListener("DOMContentLoaded", function () {
    tblSurubies = $('#tblSurubies').DataTable({
        ajax: {
            url: base_url + "Surubies/listar",
            dataSrc: ''
        },
        columns: [
            { 'data': 'cod_surubi' },
            { 'data': 'placa' },
            { 'data': 'modelo' },
            { 'data': 'fec_ultrev' },
            { 'data': 'cod_emp' },
            { 'data': 'acciones' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success btn-lg"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger btn-lg"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
})

document.addEventListener("DOMContentLoaded", function () {
    tblRutas = $('#tblRutas').DataTable({
        ajax: {
            url: base_url + "Rutas/listar",
            dataSrc: ''
        },
        columns: [
            { 'data': 'cod_ruta' },
            { 'data': 'destino' },
            { 'data': 'costov' },
            { 'data': 'acciones' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success btn-lg"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger btn-lg"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
})

document.addEventListener("DOMContentLoaded", function () {
    tblPasajeros = $('#tblPasajeros').DataTable({
        ajax: {
            url: base_url + "Pasajeros/listar",
            dataSrc: ''
        },
        columns: [
            { 'data': 'ci_pasajero' },
            { 'data': 'nom_pasajero' },
            { 'data': 'app_pasajero' },
            { 'data': 'apm_pasajero' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success "> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
})

document.addEventListener("DOMContentLoaded", function () {
    tblPasajes = $('#tblPasajes').DataTable({
        ajax: {
            url: base_url + "Pasajes/listar",
            dataSrc: ''
        },
        columns: [
            { 'data': 'cod_pasaje' },
            { 'data': 'fec_venta' },
            { 'data': 'num_asiento' },
            { 'data': 'ci_pasajero' },
            { 'data': 'cod_viaje' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
})



function frmLogin(e) {
    e.preventDefault();
    const usuario = document.getElementById("usuario");
    const clave = document.getElementById("clave");

    if (usuario.value == "") {
        clave.classList.remove("is-invalid");
        usuario.classList.add("is-invalid");
        usuario.focus();
    } else if (clave.value == "") {
        clave.classList.add("is-invalid");
        usuario.classList.remove("is-invalid");
        clave.focus();
    } else {
        const url = base_url + "Empleados/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));

        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "ok") {
                    window.location = base_url + "Inicio";
                } else {
                    document.getElementById("alerta").classList.remove("d-none");
                    document.getElementById("alerta").innerHTML = res;

                }
            }
        }
    }
}

function InfoUsuario() {
    $("#info_usuario").modal("show");
}

function frmEmpleado() {
    document.getElementById("title").innerHTML = "Nuevo empleado";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    document.getElementById("frmEmpleado").reset();
    $("#nuevo_empleado").modal("show");
    document.getElementById("cod_emp").value = "";
}

function registrarEmp(e) {
    e.preventDefault();
    const ci_emp = document.getElementById("ci_emp");
    const nom_emp = document.getElementById("nom_emp");
    const app_emp = document.getElementById("app_emp");
    const apm_emp = document.getElementById("apm_emp");
    const salario = document.getElementById("salario");
    const fecnac_emp = document.getElementById("fecnac_emp");
    const cargo = document.getElementById("cargo");
    const login = document.getElementById("login");
    const pass = document.getElementById("pass");

    if (ci_emp.value == "" || nom_emp.value == "" || app_emp.value == "" || apm_emp.value == "" || salario.value == "" || fecnac_emp.value == "" || login.value == "" || pass.value == "") {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Todos los campos son obligatorios',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        const url = base_url + "Empleados/registrar";
        const frm = document.getElementById("frmEmpleado");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                /* console.log(this.responseText); */
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Empleado registrado con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    frm.reset();
                    $("#nuevo_empleado").modal("hide");
                    tblEmpleados.ajax.reload();
                } else if (res == "modificado") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Empleado modificado con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    frm.reset();
                    $("#nuevo_empleado").modal("hide");
                    tblEmpleados.ajax.reload();
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        }
    }
}

function btnEditarEmp(cod_emp) {
    document.getElementById("title").innerHTML = "Actualizar empleado";
    document.getElementById("btnAccion").innerHTML = "Actualizar";

    const url = base_url + "Empleados/editar/" + cod_emp;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            document.getElementById("cod_emp").value = res.cod_emp;
            document.getElementById("ci_emp").value = res.ci_emp;
            document.getElementById("nom_emp").value = res.nom_emp;
            document.getElementById("app_emp").value = res.app_emp;
            document.getElementById("apm_emp").value = res.apm_emp;
            document.getElementById("salario").value = res.salario;
            document.getElementById("fecnac_emp").value = res.fecnac_emp;
            document.getElementById("cargo").value = res.cargo;
            document.getElementById("login").value = res.login;
            document.getElementById("pass").value = res.pass;
            $("#nuevo_empleado").modal("show");
        }
    }
}

function btnEliminarEmp(cod_emp) {
    Swal.fire({
        title: 'Esta seguro de continuar?',
        text: "El empleado sera eliminado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Empleados/eliminar/" + cod_emp;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();

            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const frm = document.getElementById("frmEmpleado");
                    frm.reset();
                    tblEmpleados.ajax.reload();
                }
            }
            Swal.fire(
                'Eliminado!',
                'El empleado ha sido eliminado.',
                'success'
            )
        }
    })
}

/*----------------------------------------------------------------------------------------------------*/
/* Funciones de surubi */

function frmSurubi() {
    document.getElementById("title").innerHTML = "Nuevo Surubi";
    document.getElementById("btnAccion2").innerHTML = "Registrar";
    document.getElementById("frmSurubi").reset();
    $("#nuevo_surubi").modal("show");
    document.getElementById("cod_surubi").value = "";
}

function registrarSur(e) {
    e.preventDefault();

    const placa = document.getElementById("placa");
    const modelo = document.getElementById("modelo");
    const fec_ultrev = document.getElementById("fec_ultrev");
    const cod_emp = document.getElementById("cod_emp");

    if (placa.value == "" || modelo.value == "" || fec_ultrev.value == "" || cod_emp.value == "") {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Todos los campos son obligatorios',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        const url = base_url + "Surubies/registrar";
        const frm = document.getElementById("frmSurubi");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                /* console.log(this.responseText); */
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Vehiculo registrado con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    frm.reset();
                    $("#nuevo_surubi").modal("hide");
                    tblSurubies.ajax.reload();
                } else if (res == "modificado") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Vehiculo modificado con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    frm.reset();
                    $("#nuevo_surubi").modal("hide");
                    tblSurubies.ajax.reload();
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        }
    }
}

function btnEditarSur(cod_surubi) {
    document.getElementById("title").innerHTML = "Actualizar vehiculo";
    document.getElementById("btnAccion2").innerHTML = "Actualizar";
    const url = base_url + "Surubies/editar/" + cod_surubi;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            document.getElementById("cod_surubi").value = res.cod_surubi;
            document.getElementById("placa").value = res.placa;
            document.getElementById("modelo").value = res.modelo;
            document.getElementById("fec_ultrev").value = res.fec_ultrev;
            document.getElementById("cod_emp").value = res.cod_emp;
            $("#nuevo_surubi").modal("show");
        }
    }
}

function btnEliminarSur(cod_surubi) {
    Swal.fire({
        title: 'Esta seguro de continuar?',
        text: "El vehiculo sera eliminado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Surubies/eliminar/" + cod_surubi;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();

            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const frm = document.getElementById("frmSurubi");
                    frm.reset();
                    tblSurubies.ajax.reload();
                }
            }
            Swal.fire(
                'Eliminado!',
                'El vehiculo ha ssido eliminado.',
                'success'
            )
        }
    })
}

/* --------------------------------------------------------------------------------------------------- */
/* Funciones de rutas */

function frmRuta() {
    document.getElementById("title").innerHTML = "Nueva ruta";
    document.getElementById("btnAccion3").innerHTML = "Registrar";
    document.getElementById("frmRuta").reset();
    $("#nueva_ruta").modal("show");
    document.getElementById("cod_ruta").value = "";
}


function registrarRut(e) {
    e.preventDefault();

    const destino = document.getElementById("destino");
    const costov = document.getElementById("costov");

    if (destino.value == "" || costov.value == "") {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Todos los campos son obligatorios',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        const url = base_url + "Rutas/registrar";
        const frm = document.getElementById("frmRuta");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                /* console.log(this.responseText); */
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Ruta registrada con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    frm.reset();
                    $("#nueva_ruta").modal("hide");
                    tblRutas.ajax.reload();
                } else if (res == "modificado") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Ruta modificada con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    frm.reset();
                    $("#nueva_ruta").modal("hide");
                    tblRutas.ajax.reload();
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        }
    }
}

function btnEditarRut(cod_ruta) {
    document.getElementById("title").innerHTML = "Actualizar ruta";
    document.getElementById("btnAccion3").innerHTML = "Actualizar";

    const url = base_url + "Rutas/editar/" + cod_ruta;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            document.getElementById("cod_ruta").value = res.cod_ruta;
            document.getElementById("destino").value = res.destino;
            document.getElementById("costov").value = res.costov;
            $("#nueva_ruta").modal("show");
        }
    }
}

function btnEliminarRut(cod_ruta) {
    Swal.fire({
        title: 'Esta seguro de continuar?',
        text: "La ruta sera eliminado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Rutas/eliminar/" + cod_ruta;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();

            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const frm = document.getElementById("frmRuta");
                    frm.reset();
                    tblRutas.ajax.reload();
                }
            }
            Swal.fire(
                'Eliminado!',
                'El vehiculo ha sido eliminado.',
                'success'
            )
        }
    })
}

/* --------------------------------------------------------------------------------------------------- */
/* Funciones de pasajeros */

function registrarPasa(e, asiento, idasiento) {
    e.preventDefault();
    const ci_pasajero = document.getElementById("ci_pasajero");
    const nom_pasajero = document.getElementById("nom_pasajero");
    const app_pasajero = document.getElementById("app_pasajero");
    const apm_pasajero = document.getElementById("apm_pasajero");

    const as = document.getElementById("num_asiento");
    as.value = asiento;
    const as2 = document.getElementById("ci_pasajero2");
    as2.value = ci_pasajero.value;

    if (ci_pasajero.value == "" || nom_pasajero.value == "" || app_pasajero.value == "" || apm_pasajero.value == "") {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Todos los campos son obligatorios',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        const url = base_url + "Pasajeros/registrar";
        const frm = document.getElementById("frmPasajero");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                /* console.log(this.responseText); */
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    switch (asiento) {
                        case 1:
                            const b1 = document.getElementById("btnR1");
                            b1.classList.remove("btn-success");
                            b1.classList.add("btn-danger");
                            b1.disabled = true;
                            break;
                        case 2:
                            const b2 = document.getElementById("btnR2");
                            b2.classList.remove("btn-success");
                            b2.classList.add("btn-danger");
                            b2.disabled = true;
                            break;
                        case 3:
                            const b3 = document.getElementById("btnR3");
                            b3.classList.remove("btn-success");
                            b3.classList.add("btn-danger");
                            b3.disabled = true;
                            break;
                        case 4:
                            const b4 = document.getElementById("btnR4");
                            b4.classList.remove("btn-success");
                            b4.classList.add("btn-danger");
                            b4.disabled = true;
                            break;
                        case 5:
                            const b5 = document.getElementById("btnR5");
                            b5.classList.remove("btn-success");
                            b5.classList.add("btn-danger");
                            b5.disabled = true;
                            break;
                        case 6:
                            const b6 = document.getElementById("btnR6");
                            b6.classList.remove("btn-success");
                            b6.classList.add("btn-danger");
                            b6.disabled = true;
                            break;
                        case 7:
                            const b7 = document.getElementById("btnR7");
                            b7.classList.remove("btn-success");
                            b7.classList.add("btn-danger");
                            b7.disabled = true;
                            break;
                        case 8:
                            const b8 = document.getElementById("btnR8");
                            b8.classList.remove("btn-success");
                            b8.classList.add("btn-danger");
                            b8.disabled = true;
                            break;
                        case 9:
                            const b9 = document.getElementById("btnR9");
                            b9.classList.remove("btn-success");
                            b9.classList.add("btn-danger");
                            b9.disabled = true;
                            break;
                        case 10:
                            const b10 = document.getElementById("btnR10");
                            b10.classList.remove("btn-success");
                            b10.classList.add("btn-danger");
                            b10.disabled = true;
                            break;
                        case 11:
                            const b11 = document.getElementById("btnR11");
                            b11.classList.remove("btn-success");
                            b11.classList.add("btn-danger");
                            b11.disabled = true;
                            break;
                        default:
                            break;
                    }
                    activarcampos();
                    registrarPas();
                    frm.reset();
                    desactivarcampos();
                } else if (res == "modificado") {
                    switch (asiento) {
                        case 1:
                            const b1 = document.getElementById("btnR1");
                            b1.classList.remove("btn-success");
                            b1.classList.add("btn-danger");
                            b1.disabled = true;
                            break;
                        case 2:
                            const b2 = document.getElementById("btnR2");
                            b2.classList.remove("btn-success");
                            b2.classList.add("btn-danger");
                            b2.disabled = true;
                            break;
                        case 3:
                            const b3 = document.getElementById("btnR3");
                            b3.classList.remove("btn-success");
                            b3.classList.add("btn-danger");
                            b3.disabled = true;
                            break;
                        case 4:
                            const b4 = document.getElementById("btnR4");
                            b4.classList.remove("btn-success");
                            b4.classList.add("btn-danger");
                            b4.disabled = true;
                            break;
                        case 5:
                            const b5 = document.getElementById("btnR5");
                            b5.classList.remove("btn-success");
                            b5.classList.add("btn-danger");
                            b5.disabled = true;
                            break;
                        case 6:
                            const b6 = document.getElementById("btnR6");
                            b6.classList.remove("btn-success");
                            b6.classList.add("btn-danger");
                            b6.disabled = true;
                            break;
                        case 7:
                            const b7 = document.getElementById("btnR7");
                            b7.classList.remove("btn-success");
                            b7.classList.add("btn-danger");
                            b7.disabled = true;
                            break;
                        case 8:
                            const b8 = document.getElementById("btnR8");
                            b8.classList.remove("btn-success");
                            b8.classList.add("btn-danger");
                            b8.disabled = true;
                            break;
                        case 9:
                            const b9 = document.getElementById("btnR9");
                            b9.classList.remove("btn-success");
                            b9.classList.add("btn-danger");
                            b9.disabled = true;
                            break;
                        case 10:
                            const b10 = document.getElementById("btnR10");
                            b10.classList.remove("btn-success");
                            b10.classList.add("btn-danger");
                            b10.disabled = true;
                            break;
                        case 11:
                            const b11 = document.getElementById("btnR11");
                            b11.classList.remove("btn-success");
                            b11.classList.add("btn-danger");
                            b11.disabled = true;
                            break;
                        default:
                            break;
                    }
                    activarcampos();
                    registrarPas();
                    frm.reset();
                    desactivarcampos();
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        }
    }
}

function buscarPasajero() {
    ci = ci_pasajero.value;
    const url = base_url + "Pasajeros/buscar/" + ci;
    const frm = document.getElementById("frmPasajero");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            const res = JSON.parse(this.responseText);
            if (res == "no existe") {
                prueba2("Cliente no registrado", "error");
            } else {
                prueba2("Cliente encontrado", "success");
                document.getElementById("nom_pasajero").value = res.nom_pasajero;
                document.getElementById("app_pasajero").value = res.app_pasajero;
                document.getElementById("apm_pasajero").value = res.apm_pasajero;
            }
        }
    }
}

function activarcampos() {
    const c1 = document.getElementById("fec_venta");
    fec_venta.disabled = false;
    const c2 = document.getElementById("num_asiento");
    num_asiento.disabled = false;
    const c3 = document.getElementById("ci_pasajero2");
    ci_pasajero2.disabled = false;
    const c4 = document.getElementById("cod_viaje2");
    cod_viaje2.disabled = false;
}

function desactivarcampos() {
    const c1 = document.getElementById("fec_venta");
    fec_venta.disabled = true;
    const c2 = document.getElementById("num_asiento");
    num_asiento.disabled = true;
    const c3 = document.getElementById("ci_pasajero2");
    ci_pasajero2.disabled = true;
    const c4 = document.getElementById("cod_viaje2");
    cod_viaje2.disabled = true;
}


function registrarPas() {

    const fec_venta = document.getElementById("fec_venta");
    const num_asiento = document.getElementById("num_asiento");
    const ci_pasajero = document.getElementById("ci_pasajero2");
    const cod_viaje = document.getElementById("cod_viaje2");

    const url = base_url + "Pasajes/registrar";
    const frm = document.getElementById("frmPasaje");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            const res = JSON.parse(this.responseText);
            if (res == "si") {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Pasaje vendido',
                    showConfirmButton: false,
                    timer: 1500
                })

                const url2 = base_url + "Pasajes/ultimo";
                const frm2 = document.getElementById("frmPasaje");
                http2 = new XMLHttpRequest();
                http2.open("POST", url2, true);
                http2.send(new FormData(frm2));
                http2.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        /* console.log(this.responseText);  */
                        const res2 = JSON.parse(this.responseText);
                        const ruta = base_url + 'Pasajes/generarPdf/' + res2;
                        window.open(ruta);
                    }
                }

                num_asiento.value = "";
                ci_pasajero2.value = "";

            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: res,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        }
    }
}

/* --------------------------------------------------------------------------------------------------- */
/* Funciones de viajes */

function registrarVia(e) {
    e.preventDefault();
    const cod_surubi = document.getElementById("cod_surubi");
    const cod_ruta = document.getElementById("cod_ruta");

    if (cod_surubi.value == "" || cod_ruta.value == "") {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Todos los campos son obligatorios',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        const url = base_url + "Viajes/registrar";
        const frm = document.getElementById("frmViaje");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                /* console.log(this.responseText); */
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Viaje iniciado',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    const url2 = base_url + "Viajes/ultimo";
                    frm2 = document.getElementById("frmViaje");
                    http2 = new XMLHttpRequest();
                    http2.open("POST", url2, true);
                    http2.send(new FormData(frm2));
                    http2.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            const res2 = JSON.parse(this.responseText);
                            const val2 = document.getElementById("cod_viaje2");
                            val2.value = res2;
                        }
                    }

                    frm.reset();
                    const pant0 = document.getElementById("venta0");
                    const pant1 = document.getElementById("venta1");
                    const pant2 = document.getElementById("venta2");
                    pant0.hidden = true;
                    pant1.hidden = false;
                    pant2.hidden = false;
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        }
    }
}

function Pasajeros(cod_viaje) {

    var tabla = $('#tblPasajeros').DataTable();
    tabla.destroy();
    tblPasajeros = $('#tblPasajeros').DataTable({
        ajax: {
            url: base_url + "Viajes/listarPasajeros/" + cod_viaje,
            dataSrc: ''
        },
        columns: [
            { 'data': 'ci_pasajero' },
            { 'data': 'nom_pasajero' },
            { 'data': 'app_pasajero' },
            { 'data': 'apm_pasajero' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
}

function Pasajes(cod_viaje) {

    var tabla = $('#tblPasajes').DataTable();
    tabla.destroy();
    tblPasajeros = $('#tblPasajes').DataTable({
        ajax: {
            url: base_url + "Viajes/listarPasajes/" + cod_viaje,
            dataSrc: ''
        },
        columns: [
            { 'data': 'cod_pasaje' },
            { 'data': 'fec_venta' },
            { 'data': 'num_asiento' },
            { 'data': 'ci_pasajero' },
            { 'data': 'cod_viaje' }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            extend: 'excel',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<button class="btn btn-success"> <i class="fas fa-file-excel"></i></button>'
        },
        {
            extend: 'pdf',
            footer: true,
            title: 'Archivo PDF',
            filename: 'Export_File_pdf',
            text: '<button class="btn btn-danger"> <i class="far fa-file-pdf"></i></button>'
        }
        ]
    });
}

/* --------------------------------------------------------------------------------------------------- */

function prueba() {
    prueba2();
    location.reload();

}
function prueba2(texto, icono) {
    Swal.fire({
        position: 'center',
        icon: icono,
        title: texto,
        showConfirmButton: false,
        timer: 1500
    })

}

/* ------------------------------------------------------------------------------------ */
/* Funciones para los graficos */
destinosMas();
function destinosMas() {
    const url = base_url + "Estadisticas/destinosMas";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            const res = JSON.parse(this.responseText);

            let ruta = [];
            let cantidad = [];
            for (let i = 0; i < res.length; i++) {
                ruta.push(res[i]['destino']);
                cantidad.push(res[i]['cantidad']);
            }

            var ctx = document.getElementById("destinosMas");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ruta,
                    datasets: [{
                        data: cantidad,
                        backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
                    }],
                },
            });
        }
    }
}

surubiesMas();
function surubiesMas() {
    const url = base_url + "Estadisticas/surubiesMas";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            const res = JSON.parse(this.responseText);

            let placa = [];
            let cantidad = [];
            for (let i = 0; i < res.length; i++) {
                placa.push(res[i]['placa']);
                cantidad.push(res[i]['cantidad']);
            }

            var ctx = document.getElementById("surubiesMas");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: placa,
                    datasets: [{
                        data: cantidad,
                        backgroundColor: ['#dc3545', '#ffc107', '#28a745','#007bff'],
                    }],
                },
            });
        }
    }
}

mesesMas();
function mesesMas() {
    const url = base_url + "Estadisticas/mesesMas";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            const res = JSON.parse(this.responseText);

            let mes = [];
            let cantidad = [];
            for (let i = 0; i < res.length; i++) {
                mes.push(res[i]['mes']);
                cantidad.push(res[i]['cantidad']);
            }

            var ctx = document.getElementById("mesesMas");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: mes,
                    datasets: [{
                        label: "Viajes",
                        backgroundColor: "rgba(40, 196, 3, 1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: cantidad,
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 6
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 15000,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });

        }
    }
}

pasajerosMas();
function pasajerosMas() {
    const url = base_url + "Estadisticas/pasajerosMas";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            const res = JSON.parse(this.responseText);

            let nom_completo = [];
            let cantidad = [];
            for (let i = 0; i < res.length; i++) {
                nom_completo.push(res[i]['nom_completo']);
                cantidad.push(res[i]['cantidad']);
            }

            var ctx = document.getElementById("pasajerosMas");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: nom_completo,
                    datasets: [{
                        label: "Pasajes comprados",
                        backgroundColor: "rgba(255, 228, 0, 1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: cantidad,
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 6
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 15000,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });

        }
    }
}

