<?php

namespace onemarshall\AosBundle\EventListener;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\RequestStack;
/**
 * Class HookListener
 *
 * @package onemarshall\AosBundle\EventListener
 */
class HookListener
{

    private $requestStack;
    private $scopeMatcher;

    public function __construct(RequestStack $requestStack, ScopeMatcher $scopeMatcher)
    {
        $this->requestStack = $requestStack;
        $this->scopeMatcher = $scopeMatcher;
    }

    /**
     * Inject data-aos attributes
     *
     * @param $objElement
     * @param $strBuffer
     * @return string
     */
    public function getContentElement($objElement, $strBuffer)
    {

        if ($this->isBackend() || !$objElement->aosAnimation) {

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
        $div = ' data-aos="' . array_shift($aos) . '"';

        foreach ($aos as $attr => $value) {
            $value = ($value === '1') ? 'true' : $value;
            $div .= ' data-aos-' . $attr . '="' . $value . '"';
        }

        // Inject AOS
        $div = preg_replace('/(<[a-z0-9]+)/i', '$1' . $div, $strBuffer);

        return $div;

    }

    public function isBackend()
    {
        return $this->scopeMatcher->isBackendRequest($this->requestStack->getCurrentRequest());
    }

}
