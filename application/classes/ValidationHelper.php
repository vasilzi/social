<?php
class ValidationHelper
{
	public static function email3fs($value)
	{
		$exploded=explode('@', $value);
		return end($exploded)==='3fs.si';
	}
}