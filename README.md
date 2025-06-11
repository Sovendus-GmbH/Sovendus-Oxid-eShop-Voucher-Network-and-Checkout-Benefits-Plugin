# Sovendus Voucher Network & Checkout Benefits Module for Oxid eShop
Official Sovendus Voucher Network & Checkout Benefits Plugin for Oxid eShop

> [!INFO]
> **Disclaimer**
> This plugin is released as open source under the GPL v3 license. We welcome bug reports and pull requests from the community. However, please note that the plugin is provided "as is" without any warranties or guarantees. It may not be compatible with all other plugins and could potentially cause issues with your store. We strongly recommend that you test the plugin thoroughly in a staging environment before deploying it to a live site. Furthermore, we do not promise future support or updates and reserve the right to discontinue support for the plugin at any time.

## Install through Oxid eShop App Store
coming soon...
## Manual Installation on Oxid eShop

1. Download the latest version [from here](https://raw.githubusercontent.com/Sovendus-GmbH/Sovendus-Oxid-eShop-Voucher-Network-and-Checkout-Benefits-Plugin/main/releases/sovendus-oxid-voucher-network-checkout-benefits-module-latest.zip)
2. Navigate to your Oxid eShop root folder
3. Unpack the downloaded module zip file into your Oxid eShop root folder
4. After you've unpacked it, the folder structer should look like this: yourOxidShopRoot/source/modules/sovendus/sovendus_checkout_benefits_voucher_network
5. In your Oxid eShop root folder, execute the following commands, to install the plugin: \
    `vendor/bin/oe-console oe:module:install source/modules/sovendus/sovendus_checkout_benefits_voucher_network` \
    `composer config repositories.sovendus/sovendus_checkout_benefits_voucher_network path source/modules/sovendus/sovendus_checkout_benefits_voucher_network` \
    `composer require sovendus/sovendus_checkout_benefits_voucher_network:dev-main`


## Setup the Sovendus Plugin

1. Go to your Oxid eShop shop admin dashboard
2. In the menu on the left, click on Extensions -> Module
3. Click on the Sovendus Voucher Network & Checkout Benefits module and then click on the activate button
3. Enter the traffic source number and traffic medium number, you have received in your integration documentation, for each country and enable them. Once saved, the sovendus banner will be visible on the post checkout page
