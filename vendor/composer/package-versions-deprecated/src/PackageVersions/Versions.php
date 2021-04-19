<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/doctrine-bundle' => '2.3.0@8b922578bdee2243a26202b13df795e170efaef8',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.1@e543224170a61ffe49fcadb8e7339c345df1baa2',
  'doctrine/orm' => '2.8.2@ebae57eb9637acd8252b398df3121b120688ed5c',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v6.1.1@8ef75e99f20332f2725587896364f7079b53de95',
  'symfony/asset' => 'v5.2.4@54a42aa50f9359d1184bf7e954521b45ca3d5828',
  'symfony/cache' => 'v5.2.4@d15fb2576cdbe2c40d7c851e62f85b0faff3dd3d',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.2.4@212d54675bf203ff8aef7d8cee8eecfb72f4a263',
  'symfony/console' => 'v5.2.5@938ebbadae1b0a9c9d1ec313f87f9708609f1b79',
  'symfony/dependency-injection' => 'v5.2.5@be0c7926f5729b15e4e79fd2bf917cac584b1970',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.2.5@9e2c53f3e8f8a6ccecd80de5c2c8b71beeca7fc8',
  'symfony/dotenv' => 'v5.2.4@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.2.4@b547d3babcab5c31e01de59ee33e9d9c1421d7d0',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.2.4@710d364200997a5afde34d9fe57bd52f3cc1e108',
  'symfony/finder' => 'v5.2.4@0d639a0943822626290d169965804f79400e6a04',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v5.2.5@66fecedebe5c5fc6dc9553e8f311342ac711ed3a',
  'symfony/framework-bundle' => 'v5.2.5@4dae531503072a57cf26f7f4beb4c3ef8a061f8f',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.4@54499baea7f7418bce7b5ec92770fd0799e8e9bf',
  'symfony/http-kernel' => 'v5.2.5@b8c63ef63c2364e174c3b3e0ba0bf83455f97f73',
  'symfony/intl' => 'v5.2.4@11b4217e394c80a2e313d3a4a37262fbe65a7add',
  'symfony/options-resolver' => 'v5.2.4@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/property-access' => 'v5.2.4@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.4@7185bbc74e6f49c3f1b5936b4d9e4ca133921189',
  'symfony/proxy-manager-bridge' => 'v5.2.4@fd6bb40190b1719abbe831be09adf38e0744d5f5',
  'symfony/routing' => 'v5.2.4@cafa138128dfd6ab6be1abf6279169957b34f662',
  'symfony/security-bundle' => 'v5.2.5@e6b7c0cc8f0ef361c7dd5cb8d048863addea26e5',
  'symfony/security-core' => 'v5.2.5@688b21a293a7e4168e8e493a97625ac24280629f',
  'symfony/security-csrf' => 'v5.2.4@e22ef49d5d3773014942f3dfe301b168a4a833dc',
  'symfony/security-guard' => 'v5.2.4@a191352047f2ea0d927c62e1a2f261cf906d1bde',
  'symfony/security-http' => 'v5.2.5@e7947dac6e632b40aea74f6f556c75761d1ab1e6',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.4@b12274acfab9d9850c52583d136a24398cdf1a0c',
  'symfony/string' => 'v5.2.4@4e78d7d47061fa183639927ec40d607973699609',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.2.5@f3b6854071486b20d27ba5f3148cf9fba73f670f',
  'symfony/twig-bundle' => 'v5.2.4@5ebbb5f0e8bfaa0b4b37cb25ff97f83b18caf221',
  'symfony/validator' => 'v5.2.5@456a3d95947e99c4c70e64c09833eed56095086c',
  'symfony/var-dumper' => 'v5.2.5@002ab5a36702adf0c9a11e6d8836623253e9045e',
  'symfony/var-exporter' => 'v5.2.4@5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
  'symfony/web-profiler-bundle' => 'v5.2.4@4b28c24db64156ad892300be7fae1978bed075ce',
  'symfony/webpack-encore-bundle' => 'v1.11.1@395b60a549ded8e7f77f0d551815d7555e2d9eb0',
  'symfony/yaml' => 'v5.2.5@298a08ddda623485208506fcee08817807a251dd',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/maker-bundle' => 'v1.30.1@4021ece4955286e0816a34b3d545bf1a917afb0f',
  'symfony/polyfill-ctype' => '*@fb97499782080f27d3394b04cf5698914132f564',
  'symfony/polyfill-iconv' => '*@fb97499782080f27d3394b04cf5698914132f564',
  'symfony/polyfill-php72' => '*@fb97499782080f27d3394b04cf5698914132f564',
  '__root__' => 'dev-main@fb97499782080f27d3394b04cf5698914132f564',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
