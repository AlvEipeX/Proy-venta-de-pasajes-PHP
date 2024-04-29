<?php
class Rutas extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function listar()
    {
        $data = $this->model->getRutas();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['acciones'] = '<div>
            <button class="btn btn-primary" type="button" onclick="btnEditarRut(' . $data[$i]['cod_ruta'] . ');">
                <i class="fas fa-pencil"></i> 
            </button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarRut(' . $data[$i]['cod_ruta'] . ');">
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

        $destino = $_POST["destino"];
        $costov = $_POST["costov"];
        $cod_ruta = $_POST["cod_ruta"];
        if (empty($destino) || empty($costov)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            if ($cod_ruta == "") {
                $data = $this->model->registrarRuta($destino, $costov);
                if ($data == "ok") {
                    $msg = "si";
                } else if ($data == "existe") {
                    $msg = "El destino ya existe";
                } else {
                    $msg = "Error al registrar ruta";
                }
            } else {
                $data = $this->model->modificarRuta($destino, $costov, $cod_ruta);
                if ($data == "modificado") {
                    $msg = "modificado";
                } else {
                    $msg = "Error al modificar ruta";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar(int $cod_ruta)
    {
        $data = $this->model->editarRut($cod_ruta);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminar(int $cod_ruta)
    {
        $data = $this->model->eliminarRut($cod_ruta);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
}
?>