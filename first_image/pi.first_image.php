<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * First Image Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Cole Henley
 * @link		
 */

$plugin_info = array(
	'pi_name'		=> 'First Image',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Cole Henley',
	'pi_author_url'	=> 'https://github.com/cole007',
	'pi_description'=> 'Pulls the first <img> element from a string',
	'pi_usage'		=> First_image::usage()
);


class First_image {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
		preg_match_all('#(\<\s*img [^\>]*\>)#im', $this->EE->TMPL->tagdata, $image, PREG_SET_ORDER);
		// $this->return_data = count($image);
		if (count($image) > 0) $this->return_data = $image[0][0];
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

The First image tag pair will return the first <img> element from the contributed text source.

	Sample use: {exp:first_image}{blog_entry}{/exp:first_image} 
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.first_image.php */
/* Location: /system/expressionengine/third_party/first_image/pi.first_image.php */