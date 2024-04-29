<?php
class PasajerosModel extends Query
{
    private $ci_pasajero, $datos, $nom_pasajero, $app_pasajero, $apm_pasajero;
    public function __construct()
    {
        parent::__construct();
    }
    public function buscarPasajero(string $ci)
    {
        $verificar = "SELECT * FROM pasajero WHERE ci_pasajero = '$ci'";
        $existe = $this->select($verificar);

        if (empty($existe)) {
            $data = "no existe";
        } else {
            $sql = "SELECT * FROM pasajero WHERE ci_pasajero = '$ci'";
            $data = $this->select($sql);
        }
        return $data;
    }
    public function getPasajeros()
    {
        $sql = "SELECT * FROM pasajero";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarPasajero(string $ci_pasajero, string $nom_pasajero, string $app_pasajero, string $apm_pasajero)
    {
        $this->ci_pasajero = $ci_pasajero;
        $this->nom_pasajero = $nom_pasajero;
        $this->app_pasajero = $app_pasajero;
        $this->apm_pasajero = $apm_pasajero;

        $verificar = "SELECT * FROM pasajero WHERE ci_pasajero = '$this->ci_pasajero'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $sql = "INSERT INTO pasajero(ci_pasajero, nom_pasajero, app_pasajero, apm_pasajero) 
            VALUES (?,?,?,?)";
            $datos = array($this->ci_pasajero, $this->nom_pasajero, $this->app_pasajero, $this->apm_pasajero);
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

    public function modificarPasajero(string $nom_pasajero, string $app_pasajero, string $apm_pasajero, string $ci_pasajero)
    {
        $this->nom_pasajero = $nom_pasajero;
        $this->app_pasajero = $app_pasajero;
        $this->apm_pasajero = $apm_pasajero;
        $this->ci_pasajero = $ci_pasajero;

        $sql = "UPDATE pasajero SET nom_pasajero= ?, app_pasajero= ?, apm_pasajero= ? WHERE ci_pasajero = ?";
        $datos = array($this->nom_pasajero, $this->app_pasajero, $this->apm_pasajero, $this->ci_pasajero);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "modificado";
        } else {
            $res = "error";
        }
        return $res;
    }

    /*     public function editarEmp(int $cod_emp)
        {
            $sql = "SELECT * FROM empleado WHERE cod_emp = $cod_emp";
            $data = $this->select($sql);
            return $data;
        } */

    /*     public function eliminarEmp(int $cod_emp)
        {
            $sql = "DELETE FROM empleado WHERE cod_emp = $cod_emp";
            $data = $this->select($sql);
            return $data;
        } */
}

?>