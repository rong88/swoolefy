<?php
namespace Swoolefy\Tcp;

class StartInit extends \Swoolefy\Core\StartCtrl {
	/**
	 * onStart 
	 * @param    $server
	 * @return          
	 */
	public static function onStart($server) {
		
	}

	/**
	 * onManagerStart 
	 * @param    $server
	 * @return          
	 */
	public static function onManagerStart($server){
		
	}

	/**
	 * onWorkerStart
	 * @param    $server
	 * @return   
	 */
	public static function onWorkerStart($server,$worker_id){
		
	}

	/**
	 * onWorkerStop
	 * @param    $server   
	 * @param    $worker_id
	 * @return             
	 */
	public static function onWorkerStop($server,$worker_id){
		
	}

	/**
	 * workerError 
	 * @param    $server    
	 * @param    $worker_id 
	 * @param    $worker_pid
	 * @param    $exit_code 
	 * @param    $signal    
	 * @return              
	 */
	public static function onWorkerError($server, $worker_id, $worker_pid, $exit_code, $signal) {

	}

	/**
	 * workerExit 1.9.17+版本支持
	 * @param    $server   
	 * @param    $worker_id
	 * @return                 
	 */
	public static function onWorkerExit($server, $worker_id) {

	}

	/**
	 * onManagerStop
	 * @param    $server
	 * @return          
	 */
	public static function onManagerStop($server){
		
	}
}