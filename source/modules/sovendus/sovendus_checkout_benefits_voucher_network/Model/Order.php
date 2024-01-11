<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace Sovendus\SovendusVoucherNetwork\Model;

use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleSettingBridgeInterface;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;

/**
 * @eshopExtension
 *
 * This is an example for a module extension (chain extend) of
 * the shop start controller.
 * NOTE: class must not be final.
 */
class Order extends Order_parent
{

    const MODULE_ID = "sovendus_checkout_benefits_voucher_network";
    const DE_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_DE_SovendusEnabled";
    const DE_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_DE_TrafficSourceNumber";
    const DE_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_DE_TrafficMediumNumber";

    const AT_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_AT_SovendusEnabled";
    const AT_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_AT_TrafficSourceNumber";
    const AT_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_AT_TrafficMediumNumber";

    const NL_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_NL_SovendusEnabled";
    const NL_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_NL_TrafficSourceNumber";
    const NL_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_NL_TrafficMediumNumber";

    const CH_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_CH_SovendusEnabled";
    const CH_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_CH_TrafficSourceNumber";
    const CH_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_CH_TrafficMediumNumber";

    const FR_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_FR_SovendusEnabled";
    const FR_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_FR_TrafficSourceNumber";
    const FR_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_FR_TrafficMediumNumber";

    const IT_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_IT_SovendusEnabled";
    const IT_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_IT_TrafficSourceNumber";
    const IT_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_IT_TrafficMediumNumber";

    const IE_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_IE_SovendusEnabled";
    const IE_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_IE_TrafficSourceNumber";
    const IE_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_IE_TrafficMediumNumber";

    const UK_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_UK_SovendusEnabled";
    const UK_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_UK_TrafficSourceNumber";
    const UK_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_UK_TrafficMediumNumber";

    const DK_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_DK_SovendusEnabled";
    const DK_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_DK_TrafficSourceNumber";
    const DK_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_DK_TrafficMediumNumber";

    const SE_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_SE_SovendusEnabled";
    const SE_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_SE_TrafficSourceNumber";
    const SE_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_SE_TrafficMediumNumber";

    const ES_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_ES_SovendusEnabled";
    const ES_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_ES_TrafficSourceNumber";
    const ES_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_ES_TrafficMediumNumber";

    const BE_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_BE_SovendusEnabled";
    const BE_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_BE_TrafficSourceNumber";
    const BE_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_BE_TrafficMediumNumber";

    const PL_SOVENDUS_ENABLED = "sovendus_checkout_benefits_voucher_network_PL_SovendusEnabled";
    const PL_TRAFFIC_SOURCE_NUMBER = "sovendus_checkout_benefits_voucher_network_PL_TrafficSourceNumber";
    const PL_TRAFFIC_MEDIUM_NUMBER = "sovendus_checkout_benefits_voucher_network_PL_TrafficMediumNumber";



    public $active;
    public $enabled;
    public $trafficSourceNumber;
    public $trafficMediumNumber;
    public $timestamp;
    public $usedCouponCode = "";
    public $consumerSalutation;
    public $consumerCountry;

    // TODO
    public $consumerYearOfBirth = "";

    public function initSovendusData($basket): void
    {

        $this->consumerCountry = $this->getCountryCode($this->oxorder__oxbillcountryid->rawValue);
        $this->initSovendusSettings($this->consumerCountry);
        if ($this->active) {
            $this->timestamp = time();

            $vouchers = array_values($basket->getVouchers());
            if (isset($vouchers[0])) {
                $this->usedCouponCode = $vouchers[0]->sVoucherNr;
            }

            $this->consumerSalutation = $this->oxorder__oxbillsal->rawValue === "MR" ? "Mr." : ($this->oxorder__oxbillsal->rawValue === "MRS" ? "Mrs." : "");
        }
    }

    protected function getCountryCode($sCountryId): string
    {
        $cCode = null;
        if ($sCountryId && $sCountryId != '-1') {
            $oCountry = oxNew(\OxidEsales\Eshop\Application\Model\Country::class);
            $oCountry->loadInLang($this->getOrderLanguage(), $sCountryId);
            $cCode = $oCountry->oxcountry__oxisoalpha2->rawValue;
        }
        return $cCode;
    }
    protected function initSovendusSettings($countryCode): void
    {
        $moduleSettingBridge = ContainerFactory::getInstance()
            ->getContainer()
            ->get(ModuleSettingBridgeInterface::class);

        switch ($countryCode) {
            case "DE":
                $this->enabled = (int) $moduleSettingBridge->get(self::DE_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::DE_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::DE_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "AT":
                $this->enabled = (int) $moduleSettingBridge->get(self::AT_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::AT_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::AT_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "NL":
                $this->enabled = (int) $moduleSettingBridge->get(self::NL_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::NL_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::NL_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "CH":
                $this->enabled = (int) $moduleSettingBridge->get(self::CH_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::CH_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::CH_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "FR":
                $this->enabled = (int) $moduleSettingBridge->get(self::FR_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::FR_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::FR_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "IT":
                $this->enabled = (int) $moduleSettingBridge->get(self::IT_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::IT_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::IT_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "IE":
                $this->enabled = (int) $moduleSettingBridge->get(self::IE_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::IE_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::IE_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "GB":
                $this->enabled = (int) $moduleSettingBridge->get(self::UK_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::UK_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::UK_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "DK":
                $this->enabled = (int) $moduleSettingBridge->get(self::DK_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::DK_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::DK_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "SE":
                $this->enabled = (int) $moduleSettingBridge->get(self::SE_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::SE_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::SE_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "ES":
                $this->enabled = (int) $moduleSettingBridge->get(self::ES_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::ES_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::ES_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "BE":
                $this->enabled = (int) $moduleSettingBridge->get(self::BE_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::BE_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::BE_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            case "PL":
                $this->enabled = (int) $moduleSettingBridge->get(self::PL_SOVENDUS_ENABLED, self::MODULE_ID);
                $this->trafficSourceNumber = (int) $moduleSettingBridge->get(self::PL_TRAFFIC_SOURCE_NUMBER, self::MODULE_ID);
                $this->trafficMediumNumber = (int) $moduleSettingBridge->get(self::PL_TRAFFIC_MEDIUM_NUMBER, self::MODULE_ID);
                break;
            default:
                break;
        }

        $this->active = $this->enabled && $this->trafficSourceNumber && $this->trafficMediumNumber;
    }
}