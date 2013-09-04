<?php
/**
* @version   $Id: theme.php 705 2012-05-04 23:50:42Z kevin $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*
* Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
*
*/

class GantryFusionTheme extends AbstractRokMenuTheme {

    protected $defaults = array(
        'enable_js' => 1,
        'opacity' => 1,
        'effect' => 'slidefade',
        'hidedelay' => 500,
        'menu-animation' => 'Quad.easeOut',
        'menu-duration' => 400,
        'centered-offset' => 0,
        'tweak-initial-x' => -3,
        'tweak-initial-y' => 0,
        'tweak-subsequent-x' => 0,
        'tweak-subsequent-y' => 1,
        'tweak-width' => 0,
        'tweak-height' => 0,
        'enable_current_id' => 0
    );

    public function getFormatter($args){
        require_once(dirname(__FILE__).'/formatter.php');
        return new GantryFusionFormatter($args);
    }

    public function getLayout($args){
        require_once(dirname(__FILE__).'/layout.php');
        return new GantryFusionLayout($args);
    }
}
