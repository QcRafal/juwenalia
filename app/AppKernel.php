<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Class AppKernel
 *
 * @author Rafał Kuć <qc.rafal@gmail.com>
 */
class AppKernel extends Kernel
{
    /**
     * @return array
     */
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Seven\Bundle\OneskyBundle\SevenOneskyBundle(),
            new Liip\CodeBundle\LiipCodeBundle(),

            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new FOS\RestBundle\FOSRestBundle(),

            new FOS\OAuthServerBundle\FOSOAuthServerBundle(),
            new FOS\UserBundle\FOSUserBundle(),

            new Endo\ApiBundle\EndoApiBundle(),
            new Endo\DataBundle\EndoDataBundle(),
            new Endo\ApiDocBundle\EndoApiDocBundle(),
            new Endo\UserBundle\EndoUserBundle(),
            new Endo\OAuthBundle\EndoOAuthBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();

            $bundles[] = new Elao\WebProfilerExtraBundle\WebProfilerExtraBundle();

            $bundles[] = new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
            $bundles[] = new Khepin\YamlFixturesBundle\KhepinYamlFixturesBundle();
        }

        return $bundles;
    }

    /**
     * @param LoaderInterface $loader
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
