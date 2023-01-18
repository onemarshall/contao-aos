<?php

namespace onemarshall\AosBundle;

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use onemarshall\AosBundle\EventListener\DataContainer\ContentFieldsListener;

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $palette) {
    if (\is_string($key)) {
        PaletteManipulator::create()
            ->addLegend('aos_legend', 'invisible_legend', PaletteManipulator::POSITION_BEFORE)
            ->addField('aosAnimation', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosEasing', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosDuration', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosDelay', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosAnchor', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosAnchorPlacement', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosOffset', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->addField('aosOnce', 'aos_legend', PaletteManipulator::POSITION_APPEND)
            ->applyToPalette($key, 'tl_content');
    }
}

$GLOBALS['TL_DCA']['tl_content']['fields']['aosAnimation'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosAnimation'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => [[ContentFieldsListener::class, 'getAnimations']],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosOffset'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosOffset'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'natural'],
    'sql' => "varchar(4) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosDuration'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosDuration'],
    'exclude' => true,
    'inputType' => 'text',
    'explanation' => 'aosHelp',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'natural', 'helpwizard' => true, 'minval' => 50, 'maxval' => 3000],
    'sql' => "varchar(4) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosEasing'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosEasing'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => [[ContentFieldsListener::class, 'getEasings']],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosDelay'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosDelay'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'natural'],
    'sql' => "varchar(4) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosAnchor'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosAnchor'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosAnchorPlacement'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosAnchorPlacement'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => [[ContentFieldsListener::class, 'getAnchorPlacements']],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosOnce'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosOnce'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50 m12'],
    'sql' => "char(1) NOT NULL default ''"
];


