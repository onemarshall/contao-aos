<?php


namespace onemarshall\AosBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use onemarshall\AosBundle\AosBundle;

/**
 * Plugin for the Contao Manager.
 *
 * @author Glumanda <https://github.com/onemarshall>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(AosBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}