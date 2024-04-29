<?php
class Viajes extends Controller
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
        $data = $this->model->getViajes();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['acciones1'] = '<div>
            <button class="btn btn-warning" type="button" onclick="Pasajeros(' . $data[$i]['cod_viaje'] . ');">Ver Pasajeros</button>
            <div/>';
        }
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['acciones2'] = '<div>
            <button class="btn btn-info" type="button" onclick="Pasajes(' . $data[$i]['cod_viaje'] . ');">Ver Pasajes</button>
            <div/>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        /* print_r($_POST); */

        $cod_surubi = $_POST["cod_surubi"];
        $cod_ruta = $_POST["cod_ruta"];
        $cod_viaje = $_POST["cod_viaje"];
        if (empty($cod_surubi) || empty($cod_ruta)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->registrarViaje($cod_surubi, $cod_ruta);
            if ($data == "ok") {
                $msg = "si";
            } else if ($data == "existe") {
                $msg = "El vehiculo ya existe";
            } else {
                $msg = "Error al registrar empleado";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }


    public function listarPasajeros(int $cod_viaje)
    {
        $data = $this->model->getPasajeros($cod_viaje);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listarPasajes(int $cod_viaje)
    {
        $data = $this->model->getPasajes($cod_viaje);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function ultimo()
    {
        $id = 0;
        $cod_surubi = $_POST["cod_surubi"];
        $cod_ruta = $_POST["cod_ruta"];
        $data = $this->model->getUltimo($cod_surubi, $cod_ruta);

        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['cod_viaje'] > $id) {
                $id = $data[$i]['cod_viaje'];
            }
        }

        echo json_encode($id, JSON_UNESCAPED_UNICODE);
        die();
    }
}
?>