<?php
namespace Simonschaufi\VeGuestbook;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2004-2008 Udo von Eynern (udo@voneynern.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Utility\GeneralUtility;

class CMSLayout
{
    /**
     * Returns information about this extension's pi1 plugin
     *
     * @param    array $params Parameters to the hook
     * @param    object $pObj A reference to calling object
     * @return    string        Information about pi1 plugin
     */
    function getExtensionSummary($params, &$pObj)
    {
        $result = '';
        if ($params['row']['list_type'] == 've_guestbook_pi1') {
            $data = GeneralUtility::xml2array($params['row']['pi_flexform']);
            if (is_array($data) && $data['data']['sDEF']['lDEF']['what_to_display']['vDEF']) {
                $result = sprintf(
                    $GLOBALS['LANG']->sL('LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:cms_layout.mode'), 
                    $data['data']['sDEF']['lDEF']['what_to_display']['vDEF']
                );
            }
            if (!$result) {
                $result = $GLOBALS['LANG']->sL('LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:cms_layout.not_configured');
            }
        }

        return $result;
    }
}

if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ve_guestbook/class.tx_veguestbook_cms_layout.php']) {
    include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ve_guestbook/class.tx_veguestbook_cms_layout.php']);
}
