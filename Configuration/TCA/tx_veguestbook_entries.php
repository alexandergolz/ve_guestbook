<?php

defined('TYPO3_MODE') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries',
        'label' => 'entry',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:ve_guestbook/Resources/Public/Icons/icon_tx_veguestbook_entries.gif',
        'searchFields' => 'firstname,surname,email,homepage,place,entry,entrycomment,remote_addr'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,sys_language_uid,firstname,surname,email,homepage,place,entry,entrycomment,remote_addr'
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0]
                ]
            ]
        ],
        'crdate' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.crdate',
            'config' => [
                'renderType' => 'inputDateTime',
                'behaviour' => [
                  'allowLanguageSynchronization' => '1'
                ],
                'type' => 'input',
                'size' => '10',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'tstamp' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.tstamp',
            'config' => [
                'renderType' => 'inputDateTime',
                'behaviour' => [
                  'allowLanguageSynchronization' => '1'
                ],
                'type' => 'input',
                'size' => '10',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'firstname' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.firstname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '25',
                'eval' => 'trim',
            ]
        ],
        'surname' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.surname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'email' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.email',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => '30',
                'max' => '50',
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'url,file,spec,folder,page',
                        ],
                    ],
                ],
            ]
        ],
        'homepage' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.homepage',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => '30',
                'max' => '2083',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,file,spec,folder,page',
                        ],
                    ],
                ],
                'eval' => 'trim',
            ]
        ],
        'place' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.place',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '50',
                'eval' => 'trim',
            ]
        ],
        'entry' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.entry',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ]
        ],
        'entrycomment' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.entrycomment',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ]
        ],
        'remote_addr' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.remote_addr',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '50',
                'eval' => 'trim',
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'hidden,--palette--;;1,sys_language_uid,crdate,tstamp,firstname,surname,email,homepage,place,entry,entrycomment,remote_addr;']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ]
];
