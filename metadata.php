<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'          => 'devutils-core',
    'title'       => '[devutils] _core',
    'description' => 'Developent utilities core package. It is <b>required</b> for all other dev modules from vt-devutils package.',
    'version'     => '2.0.0',
    'author'      => 'OXID Community',
    'email'       => '',
    'url'         => 'https://github.com/OXIDprojects/oxid-devutils-core',
    'extend'      => [
        \OxidEsales\Eshop\Core\Utils::class                                        => OxidCommunity\DevutilsCore\Core\Utils::class,
        \OxidEsales\Eshop\Core\UtilsView::class                                    => OxidCommunity\DevutilsCore\Core\UtilsView::class,
        \OxidEsales\Eshop\Core\ViewConfig::class                                   => OxidCommunity\DevutilsCore\Core\ViewConfig::class,
    ],
    'controllers' => [
        'gui' => OxidCommunity\DevutilsCore\Controller\Admin\Gui::class,
    ],
    'blocks'    => [
        [
            'template' => 'header.tpl',
            'block'    => 'admin_header_links',
            'file'     => 'views/admin/blocks/dev_navigation_header.tpl'
        ]
    ],
    'templates'   => [
        'dev_header.tpl'            => 'oxid-community/devutils-core/views/admin/dev_header.tpl',
        'dev_footer.tpl'            => 'oxid-community/devutils-core/views/admin/dev_footer.tpl',
        'dev_gui.tpl'               => 'oxid-community/devutils-core/views/admin/dev_gui.tpl',
    ],

/*
 *  disabled because function is not tested successful
 * ToDo: Check
 *
    'settings'    => [
        [
            'group' => 'DevCache',
            'name'  => 'bl_Dev_disableLangCache',
            'type'  => 'bool',
            'value' => false
        ],
        [
            'group' => 'DevCache',
            'name'  => 'bl_VtDev_disableSmartyCache',
            'type'  => 'bool',
            'value' => false
        ],
    ],
    */
];
