<?php
class EstadisticasModel extends Query
{
    private $datos, $ci_emp, $nom_emp, $app_emp, $apm_emp, $cargo, $salario, $fecnac_emp, $login, $pass;
    public function __construct()
    {
        parent::__construct();
    }
    public function getDatos(string $table)
    {
        $sql = "SELECT COUNT(*) AS total FROM $table";
        $data = $this->select($sql);
        return $data;
    }

    public function destinosMas()
    {
        $sql = "SELECT r.cod_ruta, r.destino, COUNT(v.cod_viaje) AS cantidad
                FROM ruta r JOIN viaje v ON r.cod_ruta = v.cod_ruta
                GROUP BY r.cod_ruta, r.destino";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function surubiesMas()
    {
        $sql = "SELECT s.cod_surubi, s.placa, COUNT(v.cod_viaje) AS cantidad
                FROM surubi s JOIN viaje v ON s.cod_surubi = v.cod_surubi
                GROUP BY s.cod_surubi, s.placa";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function mesesMas()
    {
        $sql = "SELECT MONTHNAME(fec_venta) AS mes, COUNT(*) AS cantidad
                FROM pasaje
                GROUP BY mes
                ORDER BY mes;";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function pasajerosMas()
    {
        $sql = "SELECT p.ci_pasajero, CONCAT(p.nom_pasajero, ' ', p.app_pasajero) AS nom_completo, 
                COUNT(v.cod_pasaje) AS cantidad
                FROM pasajero p JOIN pasaje v ON p.ci_pasajero = v.ci_pasajero
                GROUP BY p.ci_pasajero, nom_completo
                ORDER BY cantidad DESC
                LIMIT 5";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function getEmpleados()
    {
        $sql = "SELECT * FROM empleado";
        $data = $this->selectAll($sql);
        return $data;
    }
}
?>