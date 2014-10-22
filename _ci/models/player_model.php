<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Player_model extends MY_Model
{
	protected $skip_validation = TRUE;
	protected $table = "player";
    protected $primary_key = "playerID";
    protected $fields = array("playerID","playerName","password",'email');


	#######################################################################

    function getLoginData($playerName)
    {
    	return $this->db->where('playerName', $playerName)->get($this->table)->row_array();
    }

	#######################################################################

	function playerNameExist($playerName)
	{
		return $this->db->where('playerName', $playerName)->count_all_results($this->table);
	}

	#######################################################################
}