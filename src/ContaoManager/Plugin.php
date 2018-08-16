<?php


namespace AustinMarshall\AosBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;

/**
 * Plugin for the Contao Manager.
 *
 * @author Glumanda <https://github.com/AustinMarshall>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('AustinMarshall\AosBundle\AosBundle')
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}