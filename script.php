<?php defined('_JEXEC') or die;
/*
 * @package     Joomla.Plugin
 * @subpackage  Content.uk3tabs
 * @copyright   Copyright (C) 2019 Aleksey A. Morozov. All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

use Joomla\CMS\Factory;

class plgContentUk3tabsInstallerScript
{
    function postflight($type, $parent)
    {
        $db = Factory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->update('#__extensions')
            ->set('enabled=1')
            ->where('type=' . $db->quote('plugin'))
            ->where('element=' . $db->quote('uk3tabs'));
        $db->setQuery($query)->execute();
    }
}
