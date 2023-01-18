<?php

namespace onemarshall\AosBundle\EventListener\DataContainer;

class ContentFieldsListener
{

    public function getAnimations(): array
    {
        return [
            'fade' => [
                'fade',
                'fade-up',
                'fade-down',
                'fade-left',
                'fade-right',
                'fade-up-right',
                'fade-up-left',
                'fade-down-right',
                'fade-down-left'
            ],

            'flip' => [
                'flip-up',
                'flip-down',
                'flip-left',
                'flip-right'
            ],

            'slide' => [
                'slide-up',
                'slide-down',
                'slide-left',
                'slide-right'
            ],

            'zoom' => [
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
            ]
        ];
    }

    public function getEasings(): array
    {
        return [
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
        ];
    }

    public function getAnchorPlacements(): array
    {
        return [
            'top' => [
                'top-bottom',
                'top-center',
                'top-top'
            ],

            'center' => [
                'center-bottom',
                'center-center',
                'center-top'
            ],

            'bottom' => [
                'bottom-bottom',
                'bottom-center',
                'bottom-top'
            ]
        ];
    }

}
