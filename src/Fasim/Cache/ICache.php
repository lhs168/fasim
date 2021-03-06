<?php
/**
 * @copyright Copyright(c) 2012 Fasim
 * @author Kevin Lai<lhs168@gmail.com>
 */
namespace Fasim\Cache;
/**
 * 缓存接口
 */
interface ICache {

	/**
	 * 写入缓存
	 *
	 * @param string $key
	 *        	缓存的唯一key值
	 * @param mixed $data
	 *        	要写入的缓存数据
	 * @param int $expire
	 *        	缓存数据失效时间,单位：秒
	 * @return bool true:成功;false:失败;
	 */
	public function set($key, $data, $expire = 0);

	/**
	 * 一次写多个缓存
	 *
	 * @param array $items key value 数组
	 * @param int $expire 缓存数据失效时间,单位：秒
	 */
	public function setMulti($items, $expire = 0);

	/**
	 * 读取缓存
	 *
	 * @param string $key
	 *        	缓存的唯一key值,当要返回多个值时可以写成数组
	 * @return mixed 读取出的缓存数据;false:没有取到数据;
	 */
	public function get($key);

	/**
	 * 一次读取多个缓存
	 *
	 * @param string $keys key数组
	 * @return mixed 读取出的缓存数据;false:没有取到数据;
	 */
	public function getMulti($keys);

	/**
	 * 删除缓存
	 *
	 * @param string $key
	 *        	缓存的唯一key值
	 * @param int $timeout
	 *        	在间隔单位时间内自动删除,单位：秒
	 * @return bool true:成功; false:失败;
	 */
	public function delete($key, $timeout = 0);

	/**
	 * 递增数值
	 *
	 * @param string $key
	 *        	缓存的唯一key值
	 * @param int $offset
	 *        	偏移量，默认为1
	 * @param int $initial_value
	 *        	初始值
	 * @param int $expire
	 *        	缓存数据失效时间,单位：秒
	 * @return bool true:成功; false:失败;
	 */
	public function increment($key, $offset=1, $initial_value=0, $expiry=0);

	/**
	 * 递减数值
	 *
	 * @param string $key
	 *        	缓存的唯一key值
	 * @param int $offset
	 *        	偏移量，默认为1
	 * @param int $initial_value
	 *        	初始值
	 * @param int $expire
	 *        	缓存数据失效时间,单位：秒
	 * @return bool true:成功; false:失败;
	 */
	public function decrement($key, $offset=1, $initial_value=0, $expiry=0);

	/**
	 * 删除全部缓存
	 *
	 * @return bool true:成功；false:失败;
	 */
	public function flush();
}