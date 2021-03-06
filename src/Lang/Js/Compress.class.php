<?php
/**
 * 
 * JS压缩，支持模版语法
 * 对于有模版语法的JS，只进行简单的压缩
 * @author welefen
 *
 */
class Fl_Js_Compress extends Fl_Base {

	/**
	 * 
	 * compress options
	 * @var array
	 */
	public $options = array ();

	/**
	 * run
	 * @see Fl_Base::run()
	 */
	public function run($options = array()) {
		return $this->text;
	}
}