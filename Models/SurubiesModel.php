<?php
class SurubiesModel extends Query
{
    private $cod_surubi, $datos, $placa, $modelo, $fec_ultrev, $cod_emp;
    public function __construct()
    {
        parent::__construct();
    }

    public function getSurubies()
    {
        $sql = "SELECT * FROM surubi";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function getEmpleadosc()
    {
        $sql = "SELECT * FROM empleado WHERE cargo = 'conductor'";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarSurubi(string $placa, string $modelo, string $fec_ultrev, int $cod_emp)
    {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->fec_ultrev = $fec_ultrev;
        $this->cod_emp = $cod_emp;
        $verificar = "SELECT * FROM surubi WHERE placa = '$this->placa'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $sql = "INSERT INTO surubi(placa,modelo,fec_ultrev,cod_emp) VALUES (?,?,?,?)";
            $datos = array($this->placa, $this->modelo, $this->fec_ultrev, $this->cod_emp);
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

    public function modificarSurubi(string $placa, string $modelo, string $fec_ultrev, int $cod_emp,int $cod_surubi)
    {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->fec_ultrev = $fec_ultrev;
        $this->cod_emp = $cod_emp;
        $this->cod_surubi = $cod_surubi;
        
        $sql = "UPDATE surubi SET placa = ?, modelo = ?, fec_ultrev = ?, cod_emp= ? WHERE cod_surubi = ?";
        $datos = array($this->placa, $this->modelo, $this->fec_ultrev, $this->cod_emp, $this->cod_surubi);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "modificado";
        } else {
            $res = "error";
        }
        return $res;
    }
    public function editarSur(int $cod_surubi)
    {
        $sql = "SELECT * FROM surubi WHERE cod_surubi = $cod_surubi";
        $data = $this->select($sql);
        return $data;
    }
    public function eliminarSur(int $cod_surubi)
    {
        $sql = "DELETE FROM surubi WHERE cod_surubi = $cod_surubi";
        $data = $this->select($sql);
        return $data;
    }
}

?>