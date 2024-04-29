<?php
class RutasModel extends Query
{
    private $cod_ruta, $datos, $destino, $costov;
    public function __construct()
    {
        parent::__construct();
    }

    public function getRutas()
    {
        $sql = "SELECT * FROM ruta";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarRuta(string $destino, string $costov)
    {
        $this->destino = $destino;
        $this->costov = $costov;
        $verificar = "SELECT * FROM ruta WHERE destino = '$this->destino'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $sql = "INSERT INTO ruta(destino,costov) VALUES (?,?)";
            $datos = array($this->destino, $this->costov);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "ok";
            } else {
                $res = "error";
            }
        } else {
            $res = "existe";
        }
        return $res;
    }

    public function modificarRuta(string $destino, string $costov, int $cod_ruta)
    {
        $this->destino = $destino;
        $this->costov = $costov;
        $this->cod_ruta = $cod_ruta;
        
        $sql = "UPDATE ruta SET destino = ?, costov = ? WHERE cod_ruta = ?";
        $datos = array($this->destino, $this->costov, $this->cod_ruta);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "modificado";
        } else {
            $res = "error";
        }
        return $res;
    }
    public function editarRut(int $cod_ruta)
    {
        $sql = "SELECT * FROM ruta WHERE cod_ruta = $cod_ruta";
        $data = $this->select($sql);
        return $data;
    }
    public function eliminarRut(int $cod_ruta)
    {
        $sql = "DELETE FROM ruta WHERE cod_ruta = $cod_ruta";
        $data = $this->select($sql);
        return $data;
    }
}

?>