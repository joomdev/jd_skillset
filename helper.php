<?php

/**
 * Helper class for Jd Skillset! module
 * @package     JD Skill Set
 * @copyright   Copyright (C) 2018 Joomdev, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;

// Style Sheet
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::root().'media/mod_jd_skillset/css/mod_jd_skillset.css');
$doc->addStyleSheet(JURI::root().'media/mod_jd_skillset/css/jdgrid.min.css');
try{
	if($params->get('load_fontawesome', 1)){
		$doc->addStyleSheet('https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	}
}catch(\Exception $e){}
class modJdSkillSetHelper {
   
}
