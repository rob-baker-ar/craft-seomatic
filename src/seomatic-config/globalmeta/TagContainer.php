<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

use nystudio107\seomatic\helpers\Dependency;
use nystudio107\seomatic\models\MetaTagContainer;
use nystudio107\seomatic\services\Tag as TagService;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */

return [
    MetaTagContainer::CONTAINER_TYPE . TagService::GENERAL_HANDLE  => [
        'name'         => 'General',
        'description'  => 'General Meta Tags',
        'handle'       => TagService::GENERAL_HANDLE,
        'class'        => (string)MetaTagContainer::class,
        'include'      => 'true',
        'dependencies' => [
        ],
        'data'         => [
            'generator' => [
                'charset'   => '',
                'content'   => 'SEOmatic',
                'httpEquiv' => '',
                'name'      => 'generator',
            ],

            'keywords'    => [
                'charset'   => '',
                'content'   => '{seomatic.meta.seoTitle}',
                'httpEquiv' => '',
                'name'      => 'keywords',
            ],
            'description' => [
                'charset'   => '',
                'content'   => '{seomatic.meta.seoDescription}',
                'httpEquiv' => '',
                'name'      => 'description',
            ],
            'referrer'    => [
                'charset'   => '',
                'content'   => 'no-referrer-when-downgrade',
                'httpEquiv' => '',
                'name'      => 'referrer',
            ],
            'robots'      => [
                'charset'     => '',
                'content'     => 'index',
                'httpEquiv'   => '',
                'name'        => 'robots',
                'environment' => [
                    'live'    => [
                        'content' => 'index',
                    ],
                    'staging' => [
                        'content' => 'none',
                    ],
                    'local'   => [
                        'content' => 'none',
                    ],
                ],
            ],
        ],
    ],
    MetaTagContainer::CONTAINER_TYPE . TagService::FACEBOOK_HANDLE => [
        'name'         => 'Facebook',
        'description'  => 'Facebook OpenGraph Meta Tags',
        'handle'       => TagService::FACEBOOK_HANDLE,
        'class'        => (string)MetaTagContainer::class,
        'include'      => 'true',
        'dependencies' => [
            Dependency::CONFIG_DEPENDENCY => ['facebookProfileId', 'facebookAppId'],
        ],
        'data'         => [
            'fb:profile_id'  => [
                'charset'   => '',
                'content'   => '{seomatic.config.facebookProfileId}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'fb:profile_id',
            ],
            'fb:app_id'      => [
                'charset'   => '',
                'content'   => '{seomatic.config.facebookAppId}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'fb:app_id',
            ],
            'og:locale'      => [
                'charset'   => '',
                'content'   => '{{ craft.app.language }}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:locale',
            ],
            'og:type'        => [
                'charset'   => '',
                'content'   => 'website',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:type',
            ],
            'og:url'         => [
                'charset'   => '',
                'content'   => '{seomatic.meta.canonicalUrl}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:url',
            ],
            'og:title'       => [
                'charset'   => '',
                'content'   => '{seomatic.meta.ogTitle}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:title',
            ],
            'og:description' => [
                'charset'   => '',
                'content'   => '{seomatic.meta.ogDescription}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:description',
            ],
            'og:image'       => [
                'charset'   => '',
                'content'   => '{seomatic.meta.ogImage}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:image',
            ],
            'og:image:alt'   => [
                'dependencies' => [
                    Dependency::TAG_DEPENDENCY => ['og:image'],
                ],
                'charset'   => '',
                'content'   => '{seomatic.meta.ogImageDescription}',
                'httpEquiv' => '',
                'name'      => '',
                'property'  => 'og:image:alt',
            ],
        ],
    ],
    MetaTagContainer::CONTAINER_TYPE . TagService::TWITTER_HANDLE  => [
        'name'         => 'Twitter',
        'description'  => 'Twitter Card Meta Tags',
        'handle'       => TagService::TWITTER_HANDLE,
        'include'      => 'true',
        'class'        => (string)MetaTagContainer::class,
        'dependencies' => [
            Dependency::CONFIG_DEPENDENCY => ['twitterHandle'],
        ],
        'data'         => [
            'twitter:card'        => [
                'charset'   => '',
                'content'   => '{seomatic.meta.twitterCard}',
                'httpEquiv' => '',
                'name'      => 'twitter:card',
            ],
            'twitter:site'        => [
                'dependencies' => [
                    Dependency::CONFIG_DEPENDENCY => ['twitterHandle'],
                ],
                'charset'      => '',
                'content'      => '@{seomatic.config.twitterHandle}',
                'httpEquiv'    => '',
                'name'         => 'twitter:site',
            ],
            'twitter:creator'     => [
                'dependencies' => [
                    Dependency::META_DEPENDENCY => ['twitterCreator'],
                ],
                'charset'      => '',
                'content'      => '@{seomatic.meta.twitterCreator}',
                'httpEquiv'    => '',
                'name'         => 'twitter:creator',
            ],
            'twitter:title'       => [
                'charset'   => '',
                'content'   => '{seomatic.meta.twitterTitle}',
                'httpEquiv' => '',
                'name'      => 'twitter:title',
            ],
            'twitter:description' => [
                'charset'   => '',
                'content'   => '{seomatic.meta.twitterDescription}',
                'httpEquiv' => '',
                'name'      => 'twitter:description',
            ],
            'twitter:image'       => [
                'charset'   => '',
                'content'   => '{seomatic.meta.twitterImage}',
                'httpEquiv' => '',
                'name'      => 'twitter:image',
            ],
            'twitter:image:alt'       => [
                'dependencies' => [
                    Dependency::TAG_DEPENDENCY => ['twitter:image'],
                ],
                'charset'   => '',
                'content'   => '{seomatic.meta.twitterImageDescription}',
                'httpEquiv' => '',
                'name'      => 'twitter:image',
            ],
        ],
    ],
    MetaTagContainer::CONTAINER_TYPE . TagService::MISC_HANDLE     => [
        'name'         => 'Miscellaneous',
        'description'  => 'Miscellaneous Meta Tags',
        'handle'       => TagService::MISC_HANDLE,
        'class'        => (string)MetaTagContainer::class,
        'include'      => 'true',
        'dependencies' => [
        ],
        'data'         => [
            'google-site-verification' => [
                'charset'   => '',
                'content'   => '{seomatic.config.googleSiteVerification}',
                'httpEquiv' => '',
                'name'      => 'google-site-verification',
            ],
        ],
    ],
];
