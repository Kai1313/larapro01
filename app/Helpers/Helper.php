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
?>