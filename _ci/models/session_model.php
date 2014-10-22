<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session_model extends MY_Model
{
	protected $skip_validation = TRUE;
	protected $table = "session";
    protected $primary_key = "SID";
    // protected $fields = array();


	#######################################################################

	function updateTimestamp($key,$val)
	{
		$this->db->set('updateTimestamp' , date("Y-m-d H:i:s"))
			->where($key,$val)
			->update($this->table);
	}


	function updateStatus($status,$playerID)
	{
		$this->db
			->set('status', $status)
			->set('startTimestamp' , date("Y-m-d H:i:s"))
			->set('updateTimestamp' , date("Y-m-d H:i:s"))
			->set('inPQueue' , FALSE)
			->set('isPremium' , TRUE)
			->where('playerID',$playerID)
			->update($this->table);
	}


	function getStatus($key,$val)
	{
		$result = $this->db->select('status')
			->where($key,$val)
			->get($this->table)->row_array();

		if (count($result)>0) return $result['status'];
		else return FALSE;
	}

	#######################################################################

	function get_players_waiting($limit)
	{
		$premium = $inPQueue = array();

		if($limit > 0) 
		{
			$premium = $this->db->limit($limit)
				->select('SID,playerID')
				->where('status','WAIT')
				->where('isPremium',TRUE)
				->order_by('SID')
				->get($this->table) ->result_array();
		}

		$limit -= count($premium);

		if($limit > 0) 
		{
			$inPQueue = $this->db->limit($limit)
				->select('SID,playerID')
				->where('status','WAIT')
				->where('isPremium',FALSE)
				->where('inPQueue',TRUE)
				->order_by('SID')
				->get($this->table) ->result_array();
		}

		// echo "<pre>".print_r($premium,true)."</pre>";
		// echo "<pre>".print_r($inPQueue,true)."</pre>";
		// echo "<pre>".print_r(array_merge($premium, $inPQueue),true)."</pre>";

		return array_merge($premium, $inPQueue);
	}

	#######################################################################

	function get_players_play_idleout($idleTime=5)
	{
		$now = date('Y-m-d H:i:s');

		return $this->db
			->select("SID,status,playerID, UNIX_TIMESTAMP('{$now}') - UNIX_TIMESTAMP(updateTimestamp) AS idleTime" , FALSE)
			// ->where('status','PLAY')
			->having('idleTime > ' , $idleTime)
			->get($this->table) ->result_array();
	}


	function get_players_play_timeout($playTime=5)
	{
		$now = date('Y-m-d H:i:s');

		return $this->db
			->select("SID,status,playerID, UNIX_TIMESTAMP('{$now}') - UNIX_TIMESTAMP(startTimestamp) AS playTime" , FALSE)
			// ->where('status','PLAY')
			->having('playTime > ' , $playTime)
			->get($this->table) ->result_array();
	}

	function get_players_queue_idleout($idleTime=5)
	{
		$now = date('Y-m-d H:i:s');
		
		return $this->db
			->select("SID,playerID, UNIX_TIMESTAMP('{$now}') - UNIX_TIMESTAMP(updateTimestamp) AS idleTime, inPQueue" , FALSE)
			->where('status','WAIT')
			->having('idleTime > ' , $idleTime)
			->get($this->table) ->result_array();
	}

	#######################################################################
}