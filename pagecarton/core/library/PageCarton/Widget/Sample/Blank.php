<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    PageCarton_Widget_Sample_Blank
 * @copyright  Copyright (c) {year} PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: {filename} {date} {username} $
 */

/**
 * @see PageCarton_Widget
 */

class PageCarton_Widget_Sample_Blank extends PageCarton_Widget
{
	
    /**
     * Access level for player. Defaults to everyone
     *
     * @var boolean
     */
	protected static $_accessLevel = array( 0 );
	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = '{widget_title}'; 

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //  Code that runs the widget goes here...

            //  Output demo content to screen
             $this->setViewContent( '<h1>Hello PageCarton Widget</h1>' ); 
             $this->setViewContent( '<p>Customize this widget (' . __CLASS__ . ') by editing this file below:</p>' ); 
             $this->setViewContent( '<p style="font-size:smaller;">' . __FILE__ . '</p>' ); 

             // end of widget process
          
		}  
		catch( Exception $e )
        { 
            //  Alert! Clear the all other content and display whats below.
        //    $this->setViewContent( '<p class="badnews">' . $e->getMessage() . '</p>' ); 
            $this->setViewContent( '<p class="badnews">Theres an error in the code</p>' ); 
            return false; 
        }
	}
	// END OF CLASS
}
