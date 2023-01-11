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
    const ROOT_PACKAGE_NAME = 'simplesamlphp/simplesamlphp';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'gettext/gettext' => 'v4.8.8@302a00aa9d6762c92c884d879c15d3ed05d6a37d',
  'gettext/languages' => '2.10.0@4d61d67fe83a2ad85959fe6133d6d9ba7dddd1ab',
  'phpfastcache/riak-client' => '3.4.3@d771f75d16196006604a30bb15adc1c6a9b0fcc9',
  'phpmailer/phpmailer' => 'v6.7.1@49cd7ea3d2563f028d7811f06864a53b1f15ff55',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'robrichards/xmlseclibs' => '3.1.1@f8f19e58f26cdb42c54b214ff8a820760292f8df',
  'simplesamlphp/assert' => 'v0.0.13@5429921b320ca4f9d1844225884ac52f649ea1e3',
  'simplesamlphp/composer-module-installer' => 'v1.2.0@27b4fe96198ffaff3ab49c87b40f4cb24de77b01',
  'simplesamlphp/saml2' => 'v4.6.5@35e4cac48ef97d454d25a92eb24c85cadf96de9d',
  'simplesamlphp/simplesamlphp-module-adfs' => 'v1.0.9@c47daabc262b7e14a76879015fd9db85319752ec',
  'simplesamlphp/simplesamlphp-module-authcrypt' => 'v0.9.4@62555123e61b11463be3cd7adb708562023cff28',
  'simplesamlphp/simplesamlphp-module-authfacebook' => 'v0.9.3@9152731e939ad4a49e0f06da5f0009ebde0d2b5c',
  'simplesamlphp/simplesamlphp-module-authorize' => 'v0.9.4@4c7ce4eaa54fc301f131c62e803fc843e4d88056',
  'simplesamlphp/simplesamlphp-module-authtwitter' => 'v0.9.3@6e178e7aae7827a64dc462b5bb2f28d6eddc4381',
  'simplesamlphp/simplesamlphp-module-authwindowslive' => 'v0.9.1@f40aecec6c0adaedb6693309840c98cec783876e',
  'simplesamlphp/simplesamlphp-module-authx509' => 'v0.9.9@b138f41b2bc725371f42abb63b5a39ac11b5432a',
  'simplesamlphp/simplesamlphp-module-authyubikey' => 'v0.9.3@414e2a73da4adfee6d97ba66e852ec7c85369913',
  'simplesamlphp/simplesamlphp-module-cas' => 'v0.9.1@63b72e4600550c507cdfc32fdd208ad59a64321e',
  'simplesamlphp/simplesamlphp-module-cdc' => 'v0.9.2@92498fc3004c02849d96da29ca472d99ed23af73',
  'simplesamlphp/simplesamlphp-module-consent' => 'v0.9.8@8466b0b7c6207b15ca5e265f436299ff2dec85da',
  'simplesamlphp/simplesamlphp-module-consentadmin' => 'v0.9.2@62dc5e9d5b1a12a73549c80140b7224d7f7d1c2e',
  'simplesamlphp/simplesamlphp-module-discopower' => 'v0.10.1@4cb6b7c648b455586903b8932a171397375b50b0',
  'simplesamlphp/simplesamlphp-module-exampleattributeserver' => 'v1.0.0@63e0323e81c32bc3c9eaa01ea45194bb10153708',
  'simplesamlphp/simplesamlphp-module-expirycheck' => 'v0.9.4@02101497281031befba93c48c96ee9133f57241d',
  'simplesamlphp/simplesamlphp-module-ldap' => 'v0.9.17@40f1bfe0c4ac2f91cf8e52d22fa6ec2fe1c03066',
  'simplesamlphp/simplesamlphp-module-memcachemonitor' => 'v0.9.3@8d25463ac56b4e2294f59f622a6658e0c67086f4',
  'simplesamlphp/simplesamlphp-module-memcookie' => 'v1.2.2@39535304e8d464b7baa1e82cb441fa432947ff57',
  'simplesamlphp/simplesamlphp-module-metarefresh' => 'v0.10.0@488d7809857c274befac89facfa03520a05bc1ba',
  'simplesamlphp/simplesamlphp-module-negotiate' => 'v0.9.12@48752cea80e81a60ebb522cc10789589ac16df50',
  'simplesamlphp/simplesamlphp-module-oauth' => 'v0.9.3@2a2433144dca408315e4ee163f9ab73a6110b2b1',
  'simplesamlphp/simplesamlphp-module-preprodwarning' => 'v0.9.3@b3c6d9d41d009e340f4843ce5c24b4118a38e4c3',
  'simplesamlphp/simplesamlphp-module-radius' => 'v0.9.4@dbe2976ba27f5131faeca368a5665f8baeaae8b6',
  'simplesamlphp/simplesamlphp-module-riak' => 'v0.9.1@c1a9d9545cb4e05b9205b34624850bb777aca991',
  'simplesamlphp/simplesamlphp-module-sanitycheck' => 'v0.9.1@15d6664eae73a233c3c4c72fd8a5c2be72b6ed2a',
  'simplesamlphp/simplesamlphp-module-smartattributes' => 'v0.9.2@ba6a32fa287db0f8d767104471176f70fad7f0e1',
  'simplesamlphp/simplesamlphp-module-sqlauth' => 'v0.9.4@8a28f9a9726bab1dbc8fd3734daa08882dd0a25b',
  'simplesamlphp/simplesamlphp-module-statistics' => 'v0.9.6@03fb6bdbbf5ce0a0cb257208db79aacac227ac10',
  'simplesamlphp/twig-configurable-i18n' => 'v2.3.5@1dc0ff69ec1dfb4cab6a30c583b59faf0efc27d6',
  'symfony/cache' => 'v5.4.18@a33fa08a3f37bb44b90e60b9028796d6b811f9ef',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.4.11@ec79e03125c1d2477e43dde8528535d90cc78379',
  'symfony/console' => 'v5.4.17@58422fdcb0e715ed05b385f70d3e8b5ed4bbd45f',
  'symfony/dependency-injection' => 'v5.4.17@58f2988128d2d278280781db037677a32cf720db',
  'symfony/deprecation-contracts' => 'v3.0.2@26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
  'symfony/error-handler' => 'v6.0.17@1113c4bcf3bc77a9c79562543317479c90ba7b82',
  'symfony/event-dispatcher' => 'v6.0.17@42b3985aa07837c9df36013ec5b965e9f2d480bc',
  'symfony/event-dispatcher-contracts' => 'v3.0.2@7bc61cc2db649b4637d331240c5346dcc7708051',
  'symfony/filesystem' => 'v6.0.13@3adca49133bd055ebe6011ed1e012be3c908af79',
  'symfony/finder' => 'v5.4.17@40c08632019838dfb3350f18cf5563b8080055fc',
  'symfony/framework-bundle' => 'v5.4.17@79dba90bd8a440488b63282ea27d2b30166e8841',
  'symfony/http-foundation' => 'v5.4.17@b64a0e2df212d5849e4584cabff0cf09c5d6866a',
  'symfony/http-kernel' => 'v5.4.18@5da6f57a13e5d7d77197443cf55697cdf65f1352',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/routing' => 'v5.4.17@4ce2df9a469c19ba45ca6aca04fec1c358a6e791',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v6.0.17@3f57003dd8a67ed76870cc03092f8501db7788d9',
  'symfony/var-dumper' => 'v6.0.17@7d8e7c3c67c77790425ebe33691419dada154e65',
  'symfony/var-exporter' => 'v5.4.17@2adac0a9b55f9fb40b983b790509581dc3db0fff',
  'symfony/yaml' => 'v5.4.17@edcdc11498108f8967fe95118a7ec8624b94760e',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.15.4@3e059001d6d597dd50ea7c74dd2464b4adea48d3',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'whitehat101/apr1-md5' => 'v1.0.0@8b261c9fc0481b4e9fa9d01c6ca70867b5d5e819',
  'amphp/amp' => 'v2.6.2@9d5100cebffa729aaffecd3ad25dc5aeea4f13bb',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/semver' => '3.3.2@3953f23262f2bff1919fc82183ad9acb13ff62c9',
  'composer/xdebug-handler' => '1.4.6@f27e06cd9675801df441b3656569b328e04aa37c',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/instantiator' => '1.5.0@0a0fa9780f5d4e507415a065172d26a98d02047b',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'felixfbecker/language-server-protocol' => 'v1.5.2@6e82196ffd7c62f7794d778ca52b69feec9f2842',
  'mikey179/vfsstream' => 'v1.6.11@17d16a85e6c26ce1f3e2fa9ceeacdc2855db1e9f',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'netresearch/jsonmapper' => 'v3.1.1@ba09f0e456d4f00cef84e012da5715625594407c',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.2@48f445a408c131e38cab1c235aa6d2bb7a0bb20d',
  'phpunit/php-code-coverage' => '7.0.15@819f92bba8b001d4363065928088de22f25a3a48',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '4.0.4@a853a0e183b9db7eed023d7933a858fa1c8d25a3',
  'phpunit/phpunit' => '8.5.31@33c126b09a42de5c99e5e8032b54e8221264a74e',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.5@1dc7ceb4a24aede938c7af2a9ed1de09609ca770',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.5@73a9676f2833b9a7c36968f9d882589cd75511e6',
  'sebastian/global-state' => '3.0.2@de036ec91d55d2a9e0db2ba975b512cdb1c23921',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'simplesamlphp/simplesamlphp-test-framework' => 'v0.1.9@cc86116dd5fa1c16c08cd60665a1b2d89cdaae7a',
  'squizlabs/php_codesniffer' => '3.7.1@1359e176e9307e906dc3d890bcc9603ff6d90619',
  'symfony/http-client' => 'v5.4.17@772129f800fc0bfaa6bd40c40934d544f0957d30',
  'symfony/http-client-contracts' => 'v2.5.2@ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
  'symfony/mime' => 'v5.4.17@2a83d82efc91c3f03a23c8b47a896df168aa5c63',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'vimeo/psalm' => '3.18.2@19aa905f7c3c7350569999a93c40ae91ae4e1626',
  'webmozart/glob' => '4.6.0@3c17f7dec3d9d0e87b575026011f2e75a56ed655',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'simplesamlphp/simplesamlphp' => 'v1.19.7@',
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
        if (!self::composer2ApiUsable()) {
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
        if (self::composer2ApiUsable()) {
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

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
