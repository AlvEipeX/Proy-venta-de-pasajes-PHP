<?php
class Ventas extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $data['surubies'] = $this->model->getSurubies();
        $data['rutas'] = $this->model->getRutas();
        $this->views->getView($this, "index", $data);
    }
}
?>