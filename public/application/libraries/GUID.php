<?php
if(!defined('BASEPATH'))exit('No direct script access allowed');

/**
 * Class GUID
 *
 * Provides methods for creating and validating GUIDS
 *
 * THIS CLASS DOES NOT PROVIDE CRYPTOGRAPHICALLY SECURE GUIDS
 *
 **/
class GUID
{
	/**
	 * Function New
	 *
	 * Generates a new GUID
	 *
	 * @param NULL
	 * @return GUID
	 *
	 **/
	public function New()
	{
		//If running on windows, use the windows COM to create a GUID
		if (function_exists('com_create_guid'))
		{
			return com_create_guid();
		}
		//If not running on windows, create a GUID
		else
		{
			mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
			$charid = strtoupper(md5(uniqid(rand(), true)));
			$hyphen = chr(45);// "-"
			$uuid = substr($charid, 0, 8) . $hyphen
				. substr($charid, 8, 4) . $hyphen
				. substr($charid,12, 4) . $hyphen
				. substr($charid,16, 4) . $hyphen
				. substr($charid,20,12);
			return $uuid;
		}
	}
}
