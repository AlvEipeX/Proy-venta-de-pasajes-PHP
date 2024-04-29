<?php
class Surubies extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $data['empleados'] = $this->model->getEmpleadosc();
        $this->views->getView($this, "index", $data);
    }
    public function listar()
    {
        $data = $this->model->getSurubies();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['acciones'] = '<div>
            <button class="btn btn-primary" type="button" onclick="btnEditarSur(' . $data[$i]['cod_surubi'] . ');">
                <i class="fas fa-pencil"></i> 
            </button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarSur(' . $data[$i]['cod_surubi'] . ');">
                <i class="fas fa-trash"></i> 
            </button>
            <div/>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        /* print_r($_POST); */

        $placa = $_POST["placa"];
        $modelo = $_POST["modelo"];
        $fec_ultrev = $_POST["fec_ultrev"];
        $cod_emp = $_POST["cod_emp"];
        $cod_surubi = $_POST["cod_surubi"];
        if (empty($placa) || empty($modelo) || empty($fec_ultrev) || empty($cod_emp)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            if ($cod_surubi == "") {
                $data = $this->model->registrarSurubi($placa, $modelo, $fec_ultrev, $cod_emp);
                if ($data == "ok") {
                    $msg = "si";
                } else if ($data == "existe") {
                    $msg = "El vehiculo ya existe";
                } else {
                    $msg = "Error al registrar empleado";
                }
            } else {
                $data = $this->model->modificarSurubi($placa, $modelo, $fec_ultrev, $cod_emp, $cod_surubi);
                if ($data == "modificado") {
                    $msg = "modificado";
                } else {
                    $msg = "Error al modificar vehiculo";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar(int $cod_surubi)
    {
        $data = $this->model->editarSur($cod_surubi);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminar(int $cod_surubi)
    {
        $data = $this->model->eliminarSur($cod_surubi);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
}
?>