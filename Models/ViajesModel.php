<?php
class ViajesModel extends Query
{
    private $cod_viaje, $datos, $cod_surubi, $cod_ruta;
    public function __construct()
    {
        parent::__construct();
    }

    public function getViajes()
    {
        $sql = "SELECT * FROM viaje";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function getPasajeros(string $cod_viaje)
    {
        $sql = "SELECT ps.ci_pasajero,ps.nom_pasajero,app_pasajero,apm_pasajero 
        FROM pasajero ps,viaje v,pasaje p 
        WHERE v.cod_viaje = $cod_viaje
        AND v.cod_viaje = p.cod_viaje
        AND p.ci_pasajero = ps.ci_pasajero;";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function getPasajes(string $cod_viaje)
    {
        $sql = "SELECT p.cod_pasaje,p.fec_venta,p.num_asiento,p.ci_pasajero,p.cod_viaje 
        FROM viaje v,pasaje p 
        WHERE v.cod_viaje = $cod_viaje
        AND v.cod_viaje = p.cod_viaje";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function getSurubies()
    {
        $sql = "SELECT * FROM surubi";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function getUltimo(string $cod_surubi, string $cod_ruta)
    {
        $this->cod_surubi = $cod_surubi;
        $this->cod_ruta = $cod_ruta;
        $sql = "SELECT * FROM viaje  WHERE cod_surubi = '$this->cod_surubi' AND cod_ruta = '$this->cod_ruta'";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function registrarViaje(string $cod_surubi, string $cod_ruta)
    {
        $this->cod_surubi = $cod_surubi;
        $this->cod_ruta = $cod_ruta;
        $verificar = "SELECT * FROM viaje WHERE cod_viaje = '$this->cod_viaje'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $sql = "INSERT INTO viaje(cod_surubi, cod_ruta) 
            VALUES (?,?)";
            $datos = array($this->cod_surubi, $this->cod_ruta);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "ok";
            } else {
                $res = "error";
            }
        } else{
            $res = "existe";
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