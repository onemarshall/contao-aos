<?php

namespace onemarshall\AosBundle\EventListener;

use Contao\ContentModel;
use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\RequestStack;

#[AsHook('getContentElement')]
class GetContentElementListener
{

    private RequestStack $requestStack;
    private ScopeMatcher $scopeMatcher;

    public function __construct(RequestStack $requestStack, ScopeMatcher $scopeMatcher)
    {
        $this->requestStack = $requestStack;
        $this->scopeMatcher = $scopeMatcher;
    }

    public function __invoke(ContentModel $contentModel, string $buffer, $element): string
    {
        if (!$contentModel->aosAnimation || $this->isBackend()) {
            return $buffer;
        }

        $aos = [
            '' => $contentModel->aosAnimation,
            'easing' => $contentModel->aosEasing,
            'duration' => $contentModel->aosDuration,
            'delay' => $contentModel->aosDelay,
            'anchor' => $contentModel->aosAnchor,
            'anchor-placement' => $contentModel->aosAnchorPlacement,
            'offset' => $contentModel->aosOffset,
            'once' => $contentModel->aosOnce
        ];

        $aos = array_filter($aos, static function ($value) {
            return $value !== '';
        });
        $div = ' data-aos="' . array_shift($aos) . '"';

        foreach ($aos as $attr => $value) {
            $value = ($value === '1') ? 'true' : $value;
            $div .= ' data-aos-' . $attr . '="' . $value . '"';
        }

        // Inject AOS
        return preg_replace('/(<[a-z0-9]+)/i', '$1' . $div, $buffer);
    }

    public function isBackend(): bool
    {
        return $this->scopeMatcher->isBackendRequest($this->requestStack->getCurrentRequest());
    }

}
