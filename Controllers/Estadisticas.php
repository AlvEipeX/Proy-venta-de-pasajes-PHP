<?php
class Estadisticas extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $data['empleado'] = $this->model->getDatos('empleado');
        $data['surubi'] = $this->model->getDatos('surubi');
        $data['viaje'] = $this->model->getDatos('viaje');
        $data['pasajero'] = $this->model->getDatos('pasajero');
        $this->views->getView($this, "index", $data);
    }
    public function destinosMas()
    {
        $data = $this->model->destinosMas();
        echo json_encode($data);
        die();
    }

    public function surubiesMas()
    {
        $data = $this->model->surubiesMas();
        echo json_encode($data);
        die();
    }
    public function mesesMas()
    {
        $data = $this->model->mesesMas();
        echo json_encode($data);
        die();
    }
    public function pasajerosMas()
    {
        $data = $this->model->pasajerosMas();
        echo json_encode($data);
        die();
    }
}
?>