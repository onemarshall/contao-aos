<?php

namespace onemarshall\AosBundle\EventListener\DataContainer;

class ContentFieldsListener
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
