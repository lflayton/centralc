<?php
/**
 * @package		mod_sidebar
 * @copyright	Copyright (C) 2012 Beyounic SA. All rights reserved.
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.beyounic.com
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

class ModOhanaheventmapHtml extends ModDefaultHtml
{
	public function __construct(KConfig $config)
    {
        parent::__construct($config);
        $this->params  = $config->params;
    }
    
	public function display()
	{
		$id = null;
		if (KRequest::get('get.view', 'string') == 'event') $id = KRequest::get('get.id', 'int');
		if (KRequest::get('get.view', 'string') == 'registration') $id = KRequest::get('get.ohanah_event_id', 'int');
		if (!$id) $id = JFactory::getApplication()->getPageParameters()->get('id');
		
		if ((KRequest::get('get.option', 'string') == 'com_ohanah') && $id)
		{
		
			$event = $this->getService('com://admin/ohanah.model.events')
							->id($id)
							->getItem();
										
			$this->assign('event', $event);
			$this->assign('params', $this->params);
			
			return parent::display();		
		}
	}
}
