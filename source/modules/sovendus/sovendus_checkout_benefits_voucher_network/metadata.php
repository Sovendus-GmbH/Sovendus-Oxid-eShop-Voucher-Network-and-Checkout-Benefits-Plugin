<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
/**
 * Module information
 */
$aModule = array(
    'id' => 'sovendus_checkout_benefits_voucher_network',
    'title' => 'Sovendus Voucher Network & Checkout Benefits',
    'description' => 'Official Sovendus Voucher Network & Checkout Benefits module for Oxid eShop',
    'thumbnail' => 'plugin.png',
    'version' => '1.1.1',
    'author' => 'Sovendus - Marcus Brandstaetter',
    'url' => "https://online.sovendus.com/kontakt/kontakt-firmenkunden/",
    'extend' => [
        \OxidEsales\Eshop\Application\Model\Order::class => \Sovendus\SovendusVoucherNetwork\Model\Order::class,
    ],
    'settings' => [
        /** DE */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_de',
            'name' => 'sovendus_checkout_benefits_voucher_network_DE_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_de',
            'name' => 'sovendus_checkout_benefits_voucher_network_DE_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_de',
            'name' => 'sovendus_checkout_benefits_voucher_network_DE_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** AT */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_at',
            'name' => 'sovendus_checkout_benefits_voucher_network_AT_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_at',
            'name' => 'sovendus_checkout_benefits_voucher_network_AT_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_at',
            'name' => 'sovendus_checkout_benefits_voucher_network_AT_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** NL */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_nl',
            'name' => 'sovendus_checkout_benefits_voucher_network_NL_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_nl',
            'name' => 'sovendus_checkout_benefits_voucher_network_NL_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_nl',
            'name' => 'sovendus_checkout_benefits_voucher_network_NL_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** CH DE */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_de',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_DE_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_de',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_DE_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_de',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_DE_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** CH FR */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_FR_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_FR_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_FR_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** CH IT */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_it',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_IT_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_it',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_IT_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ch_it',
            'name' => 'sovendus_checkout_benefits_voucher_network_CH_IT_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** FR */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_FR_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_FR_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_FR_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** IT */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_it',
            'name' => 'sovendus_checkout_benefits_voucher_network_IT_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_it',
            'name' => 'sovendus_checkout_benefits_voucher_network_IT_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_it',
            'name' => 'sovendus_checkout_benefits_voucher_network_IT_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** IE */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ie',
            'name' => 'sovendus_checkout_benefits_voucher_network_IE_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ie',
            'name' => 'sovendus_checkout_benefits_voucher_network_IE_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_ie',
            'name' => 'sovendus_checkout_benefits_voucher_network_IE_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** UK */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_uk',
            'name' => 'sovendus_checkout_benefits_voucher_network_UK_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_uk',
            'name' => 'sovendus_checkout_benefits_voucher_network_UK_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_uk',
            'name' => 'sovendus_checkout_benefits_voucher_network_UK_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** DK */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_dk',
            'name' => 'sovendus_checkout_benefits_voucher_network_DK_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_dk',
            'name' => 'sovendus_checkout_benefits_voucher_network_DK_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_dk',
            'name' => 'sovendus_checkout_benefits_voucher_network_DK_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** SE */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_se',
            'name' => 'sovendus_checkout_benefits_voucher_network_SE_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_se',
            'name' => 'sovendus_checkout_benefits_voucher_network_SE_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_se',
            'name' => 'sovendus_checkout_benefits_voucher_network_SE_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** ES */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_es',
            'name' => 'sovendus_checkout_benefits_voucher_network_ES_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_es',
            'name' => 'sovendus_checkout_benefits_voucher_network_ES_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_es',
            'name' => 'sovendus_checkout_benefits_voucher_network_ES_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** BE NL */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_be_nl',
            'name' => 'sovendus_checkout_benefits_voucher_network_BE_NL_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_be_nl',
            'name' => 'sovendus_checkout_benefits_voucher_network_BE_NL_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_be_nl',
            'name' => 'sovendus_checkout_benefits_voucher_network_BE_NL_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** BE FR */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_be_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_BE_FR_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_be_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_BE_FR_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_be_fr',
            'name' => 'sovendus_checkout_benefits_voucher_network_BE_FR_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** PL */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_pl',
            'name' => 'sovendus_checkout_benefits_voucher_network_PL_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_pl',
            'name' => 'sovendus_checkout_benefits_voucher_network_PL_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_pl',
            'name' => 'sovendus_checkout_benefits_voucher_network_PL_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** NO */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_no',
            'name' => 'sovendus_checkout_benefits_voucher_network_NO_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_no',
            'name' => 'sovendus_checkout_benefits_voucher_network_NO_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_no',
            'name' => 'sovendus_checkout_benefits_voucher_network_NO_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** FI */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_fi',
            'name' => 'sovendus_checkout_benefits_voucher_network_FI_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_fi',
            'name' => 'sovendus_checkout_benefits_voucher_network_FI_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_fi',
            'name' => 'sovendus_checkout_benefits_voucher_network_FI_TrafficMediumNumber',
            'type' => 'num',
        ],
        /** PT */
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_pt',
            'name' => 'sovendus_checkout_benefits_voucher_network_PT_SovendusEnabled',
            'type' => 'bool',
            'value' => false
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_pt',
            'name' => 'sovendus_checkout_benefits_voucher_network_PT_TrafficSourceNumber',
            'type' => 'num',
        ],
        [
            'group' => 'sovendus_checkout_benefits_voucher_network_pt',
            'name' => 'sovendus_checkout_benefits_voucher_network_PT_TrafficMediumNumber',
            'type' => 'num',
        ],
    ],
);