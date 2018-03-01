<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core_Model extends CI_Model {
	function rute_custom_sel($from, $to, $departure, $passengers)
	{
		$seat_qty = $this->db->query("SELECT `transportation`.`seat_qty` FROM `transportation`, `rute` WHERE `rute`.`rute_from` = '".$from."' AND `rute`.`rute_to` = '".$to."' AND `rute`.`depart_at` BETWEEN '".$departure." 00.00.00' AND '".$departure." 23.59.59' AND `rute`.`transportid` = `transportation`.`transportid`")->result();
		if ($seat_qty == null) $seat_qty = array((object) array('seat_qty' => 0));
		$reservationnumrows = $this->db->query("SELECT * FROM `reservation`, `rute`, `transportation` WHERE `rute`.`rute_from` = '".$from."' AND `rute`.`rute_to` = '".$to."' AND `rute`.`depart_at` BETWEEN '".$departure." 00.00.00' AND '".$departure." 23.59.59' AND `rute`.`transportid` = `transportation`.`transportid` AND `reservation`.`ruteid` = `rute`.`ruteid`")->num_rows();
		$sql = "SELECT `rute`.*, `transportation`.`code`, `transportation`.`description`, `transportation`.`transport_typeid` FROM `rute`, `transportation` WHERE `rute`.`rute_from` = '".$from."' AND `rute`.`rute_to` = '".$to."' AND `rute`.`depart_at` BETWEEN '".$departure." 00.00.00' AND '".$departure." 23.59.59' AND `rute`.`transportid` = `transportation`.`transportid` AND ".intval($passengers)." < ".(intval($seat_qty[0]->seat_qty) - $reservationnumrows);
		//return $sql;
		return $this->db->query($sql)->result();
	}

	function sel_rute_w_transportation_by_id($id)
	{
		$this->db->select('rute.*, transportation.code, transportation.description, transportation.seat_qty, transportation.transport_typeid');
		$this->db->from('rute, transportation');
		$this->db->where("rute.ruteid = '".$id."' AND rute.transportid = transportation.transportid");
		return $this->db->get()->result();
	}
}