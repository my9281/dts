<?php

namespace skill2
{
	function init() {}
	
	function acquire2(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function lost2(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function skill_onload_event(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (strpos($pa['inf'],'h')!==false) \skillbase\skill_acquire(2,$pa);
		$chprocess($pa);
	}
	
	function skill_onsave_event(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(2,$pa)) \skillbase\skill_lost(2,$pa);
		$chprocess($pa);
	}
	
	function get_hitrate(&$pa,&$pd,$active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(2,$pa))		//头部受伤命中率降低
			return $chprocess($pa,$pd,$active)*0.75;
		else  return $chprocess($pa,$pd,$active);
	}
}

?>
