<?php

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $palette) {

    if (is_string($key)) {
        $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(
            '{invisible_legend:hide}',
            '{aos_legend:hide},
                    aosAnimation,
                    aosEasing,
                    aosDuration,
                    aosDelay,
                    aosAnchor,
                    aosAnchorPlacement,
                    aosOffset,
                    aosOnce;
                    {invisible_legend:hide}',
            $palette
        );
    }

}

$GLOBALS['TL_DCA']['tl_content']['fields']['aosAnimation'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosAnimation'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_content_aos', 'getAnimations'),
    'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosOffset'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosOffset'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class' => 'w50', 'rgxp' => 'natural'),
    'sql' => "varchar(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosDuration'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosDuration'],
    'exclude' => true,
    'inputType' => 'text',
    'explanation' => 'aosHelp',
    'eval' => array('tl_class' => 'w50', 'rgxp' => 'natural', 'helpwizard' => true, 'minval' => 50, 'maxval' => 3000),
    'sql' => "varchar(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosEasing'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosEasing'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_content_aos', 'getEasings'),
    'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosDelay'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosDelay'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class' => 'w50', 'rgxp' => 'natural'),
    'sql' => "varchar(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosAnchor'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosAnchor'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class' => 'w50'),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosAnchorPlacement'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosAnchorPlacement'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_content_aos', 'getAnchorPlacements'),
    'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['aosOnce'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosOnce'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('tl_class' => 'w50 m12'),
    'sql' => "char(1) NOT NULL default ''"
);


class tl_content_aos
{

    public function getAnimations()
    {

        return array(
            'fade' => array(
                'fade',
                'fade-up',
                'fade-down',
                'fade-left',
                'fade-right',
                'fade-up-right',
                'fade-up-left',
                'fade-down-right',
                'fade-down-left'
            ),

            'flip' => array(
                'flip-up',
                'flip-down',
                'flip-left',
                'flip-right'
            ),

            'slide' => array(
                'slide-up',
                'slide-down',
                'slide-left',
                'slide-right'
            ),

            'zoom' => array(
                'zoom-in',
                'zoom-in-up',
                'zoom-in-down',
                'zoom-in-left',
                'zoom-in-right',
                'zoom-out',
                'zoom-out-up',
                'zoom-out-down',
                'zoom-out-left',
                'zoom-out-right'
            )
        );

    }

    public function getEasings()
    {

        return array(
            'linear',
            'ease',
            'ease-in',
            'ease-in-back',
            'ease-in-sine',
            'ease-in-quad',
            'ease-in-cubic',
            'ease-in-quart',
            'ease-out',
            'ease-out-back',
            'ease-out-sine',
            'ease-out-quad',
            'ease-out-cubic',
            'ease-out-quart',
            'ease-in-out',
            'ease-in-out-back',
            'ease-in-out-sine',
            'ease-in-out-quad',
            'ease-in-out-cubic',
            'ease-in-out-quart'
        );

    }

    public function getAnchorPlacements()
    {

        return array(
            'top' => array(
                'top-bottom',
                'top-center',
                'top-top'
            ),

            'center' => array(
                'center-bottom',
                'center-center',
                'center-top'
            ),

            'bottom' => array(
                'bottom-bottom',
                'bottom-center',
                'bottom-top'
            )
        );

    }

}
