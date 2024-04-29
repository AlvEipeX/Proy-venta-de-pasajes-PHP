<?php
class Pasajeros extends Controller
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
        $data = $this->model->getPasajeros();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        /* print_r($_POST); */

        $ci_pasajero = $_POST["ci_pasajero"];
        $nom_pasajero = $_POST['nom_pasajero'];
        $app_pasajero = $_POST['app_pasajero'];
        $apm_pasajero = $_POST['apm_pasajero'];
        if (empty($ci_pasajero) || empty($nom_pasajero) || empty($app_pasajero) || empty($apm_pasajero)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->registrarPasajero($ci_pasajero, $nom_pasajero, $app_pasajero, $apm_pasajero);
            if ($data == "ok") {
                $msg = "si";
            } else if ($data == "existe") {
                $data = $this->model->modificarPasajero($nom_pasajero, $app_pasajero, $apm_pasajero, $ci_pasajero);
                if ($data == "modificado") {
                    $msg = "modificado";
                } else {
                    $msg = "Error al modificar pasajero";
                }
            } else {
                $msg = "Error al registrar pasajero";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }



    public function buscar($ci)
    {
        $data = $this->model->buscarPasajero($ci);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
}

?>