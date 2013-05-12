<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


interface IServiceDAO {
    public function insertService($service); // return boolean
    public function deleteService($service); // return boolean
    public function updateService($service); // return service
    public function findService($service); // return boolean
    public function selectService($service); // return service
    public function selectServices($services_filter, $limit);  // return array of Services
}
?>
