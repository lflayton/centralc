<?php
/**
* @package   ZOO Item
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

// load config
require_once(JPATH_ADMINISTRATOR.'/components/com_zoo/config.php');

class JFormFieldFilename extends JFormField {

	protected $type = 'Filename';

	public function getInput() {

		// get app
		$app = App::getInstance('zoo');

		// create select
		$path    = dirname(dirname(__FILE__)).$this->element->attributes()->path;
		$options = array();

		if (is_dir($path)) {
			foreach (JFolder::files($path, '^([-_A-Za-z0-9]+)\.php$') as $tmpl) {
				$tmpl = basename($tmpl, '.php');
				$options[] = $app->html->_('select.option', $tmpl, ucwords($tmpl));
			}
		}

		return $app->html->_('select.genericlist', $options, "{$this->formControl}[{$this->group}][{$this->fieldname}]", '', 'value', 'text', $this->value);
	}

}