<?php
	/**
	 * Return nav-here if current path begins with this path.
	 *
	 * @param string $path
	 * @return string
	 */
	function isActive($path)
	{
	    return Request::is($path . '*') ? ' active' :  '';
	}

	function set_active($uri, $output = 'active')
	{
	 	if( is_array($uri) )
	 	{
	  	foreach ($uri as $u)
	   	{
	    	if (Request::is($u))
	     	{
	      	return $output;
	     	}
	   	}
	 	}
	 	else
	 	{
	   	if (Request::is($uri))
	   	{
	    	return $output;
	   	}
	 	}
	}
?>