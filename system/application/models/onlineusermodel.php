<?php

Class Onlineusermodel extends model {

	function onlineusermodel(){
		parent::Model();
	
		$this->_table_acct = 'radacct';
	
	}
	
	function get_onlineusers() {
		
		return $this->db->query('select username, acctstarttime as start, sum(acctsessiontime) as time,sum(acctoutputoctets+acctinputoctets) as packet from radacct where acctstoptime is null group by username');
	}
	

}

?>
	
