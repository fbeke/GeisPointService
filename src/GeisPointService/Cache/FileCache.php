<?php
/**
 * GeisPointService - Library implementing PHP client for GeisPoint web service.
 *
 * @author Ondřej Doněk, <ondrej.donek@ebrana.cz>
 * @license https://www.mozilla.org/MPL/2.0/ name
 */

namespace GeisPointService\Cache;

/**
 * Class that implementing file cache for `GeisPointService`.
 *
 * @author Ondřej Doněk, <ondrej.donek@ebrana.cz>
 */
class FileCache implements CacheInterface
{
	/**
	 * Constructor.
	 *
	 * @param array $options (Optional.)
	 * @return void
	 */
	public function __construct($options = array())
	{
		throw new Exception('Not implemented yet!');
	}

	/**
	 * Returns `TRUE` if value with given key exists in the cache.
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function exists($key)
	{
		throw new Exception('Not implemented yet!');
	}

	/**
	 * Returns value for the given key.
	 *
	 * @param string $key
	 * @return mixed
	 */
	public function get($key)
	{
		throw new Exception('Not implemented yet!');
	}

	/**
	 * Adds new value into the cache.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 */
	public function set($key, $value)
	{
		throw new Exception('Not implemented yet!');
	}
}