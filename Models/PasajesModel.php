<?php
class PasajesModel extends Query
{
    private $cod_pasaje, $datos, $fec_venta, $num_asiento, $ci_pasajero, $cod_viaje;
    public function __construct()
    {
        parent::__construct();
    }
    /*     public function getEmpleado(string $usuario, string $clave)
        {
            $sql = "SELECT * FROM empleado WHERE login = '$usuario' AND pass = '$clave'";
            $data = $this->select($sql);
            return $data;
        } */
    public function getPasaje(string $cod_pasaje)
    {
        $sql = "SELECT * FROM pasaje WHERE cod_pasaje = $cod_pasaje";
        $data = $this->select($sql);
        return $data;
    }

    public function getPasajero(string $ci_pasajero)
    {
        $sql = "SELECT * FROM pasajero WHERE ci_pasajero = $ci_pasajero";
        $data = $this->select($sql);
        return $data;
    }

    public function getRuta(string $cod_ruta)
    {
        $sql = "SELECT * FROM ruta WHERE cod_ruta = $cod_ruta";
        $data = $this->select($sql);
        return $data;
    }

    public function getViaje(string $cod_viaje)
    {
        $sql = "SELECT * FROM viaje WHERE cod_viaje = $cod_viaje";
        $data = $this->select($sql);
        return $data;
    }

    public function getPasajes()
    {
        $sql = "SELECT * FROM pasaje";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarPasaje(string $fec_venta, string $num_asiento, string $ci_pasajero, string $cod_viaje)
    {
        $this->fec_venta = $fec_venta;
        $this->num_asiento = $num_asiento;
        $this->ci_pasajero = $ci_pasajero;
        $this->cod_viaje = $cod_viaje;

        $sql = "INSERT INTO pasaje(fec_venta, num_asiento, ci_pasajero, cod_viaje) 
            VALUES (?,?,?,?)";
        $datos = array($this->fec_venta, $this->num_asiento, $this->ci_pasajero, $this->cod_viaje);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    /*     public function modificarEmpleado(string $ci_emp, string $nom_emp, string $app_emp, string $apm_emp, string $salario, string $fecnac_emp, string $cargo, string $login, string $pass, int $cod_emp)
        {
            $this->cod_emp = $cod_emp;
            $this->ci_emp = $ci_emp;
            $this->nom_emp = $nom_emp;
            $this->app_emp = $app_emp;
            $this->apm_emp = $apm_emp;
            $this->salario = $salario;
            $this->fecnac_emp = $fecnac_emp;
            $this->cargo = $cargo;
            $this->login = $login;
            $this->pass = $pass;

            $sql = "UPDATE empleado SET ci_emp = ?, nom_emp= ?, app_emp= ?, apm_emp= ?, salario= ?, fecnac_emp= ?, cargo= ?, login= ?, pass= ? WHERE cod_emp = ?";
            $datos = array($this->ci_emp, $this->nom_emp, $this->app_emp, $this->apm_emp, $this->salario, $this->fecnac_emp, $this->cargo, $this->login, $this->pass, $this->cod_emp);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "modificado";
            } else {
                $res = "error";
            }
            return $res;
        } */

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