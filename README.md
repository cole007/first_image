first_image
===========

ExpressionEngine plugin: tag pair to pull the first <img> element from a defined string. The {exp:first_image} tag pair will return the first <img> element from the contributed text source.

	{exp:first_image}{blog_entry}{/exp:first_image} 
	
If there is no <img> element in the text source then no value will be returned.

To return just the value of the src attribute use the show parameter, as follows:
	
	{exp:first_image show="src"}{blog_entry}{/exp:first_image} 