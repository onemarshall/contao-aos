<?php

namespace AustinMarshall\AosBundle\EventListener;

/**
 * Class HookListener
 *
 * @package AustinMarshall\AosBundle\EventListener
 */
class HookListener
{

    /**
     * Inject data-aos attributes
     *
     * @param $objElement
     * @param $strBuffer
     * @return string
     */
    public function getContentElement($objElement, $strBuffer)
    {

        if (TL_MODE == 'BE' || !$objElement->aosAnimation) {

            return $strBuffer;

        }

        $aos = array(
            '' => $objElement->aosAnimation,
            'easing' => $objElement->aosEasing,
            'duration' => $objElement->aosDuration,
            'delay' => $objElement->aosDelay,
            'anchor' => $objElement->aosAnchor,
            'anchor-placement' => $objElement->aosAnchorPlacement,
            'offset' => $objElement->aosOffset,
            'once' => $objElement->aosOnce
        );

        $aos = array_filter($aos, function ($value) { return $value !== ''; });
        $div = '<div data-aos="' . array_shift($aos) . '"';

        foreach ($aos as $attr => $value) {
            $value = ($value === '1') ? 'true' : $value;
            $div .= ' data-aos-' . $attr . '="' . $value . '"';
        }

        $div .= '>' . $strBuffer;
        $div .= '</div>';

        return $div;

    }

}