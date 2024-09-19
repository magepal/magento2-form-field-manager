<a href="https://www.magepal.com" ><img src="https://image.ibb.co/dHBkYH/Magepal_logo.png" width="100" align="right" /></a>

# Customer and Address Form Fields Manager for Magento2

[![Total Downloads](https://poser.pugx.org/magepal/magento2-form-field-manager/downloads)](https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html)
[![Latest Stable Version](https://poser.pugx.org/magepal/magento2-form-field-manager/v/stable)](https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html)


<a href="https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html" ><img alt="Magento Extensions" src="https://user-images.githubusercontent.com/1415141/109392207-dcf93f00-78e8-11eb-875d-d23be0c9b29b.png" /></a>

Quickly and easily remove unwanted form fields from admin order creation and customer account, added by default magento or other third party extensions


![Magento2 Configuration](https://user-images.githubusercontent.com/1415141/31972382-717b22a6-b8ee-11e7-8549-934d87ed01b1.png)

### After (Admin order creation)
![Magento Admin order creation](https://user-images.githubusercontent.com/1415141/31972782-5de22300-b8f0-11e7-8330-8e056d072e4b.png)

### Features
 - Remove unneeded form fields from:
   - Admin order creation
   - Customer admin
   
 - No code or template modification 
 
 - Switch on/off form fields via Magento backend.
 
 #### Customer Attributes
 - Name Prefix
 - Middle Name/Initial
 - Name Suffix
 - Date of Birth
 - Tax/VAT Number
 - Gender
 
 
  #### Address Attributes
  - Name Prefix
  - Middle Name/Initial
  - Name Suffix
  - Company
  - Fax
  - VAT Number
  
### Installation
#### Step 1 - Installation Customer Account Links Manager

##### Using Composer (recommended)
```
composer require magepal/magento2-form-field-manager
```

##### Manually
 * Download the extension
 * Unzip the file
 * Create a folder {Magento 2 root}/app/code/MagePal/FormFieldManager
 * Copy the content from the unzip folder


#### Step 2 - Enable Customer Account Links Manager (from {Magento root} folder)
 * php -f bin/magento module:enable --clear-static-content MagePal_FormFieldManager
 * php -f bin/magento setup:upgrade

#### Step 3 - Configure Customer Account Links Manager

Log into your Magento 2 Admin, then goto Stores -> Configuration -> MagePal -> Form Field Manager

Contribution
---
Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Support
---
If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magepal/magento2-formfieldmanager/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.

Magento 2 Extensions
---
- [Custom SMTP](https://www.magepal.com/magento2/extensions/custom-smtp.html)
- [Catalog Hover Image for Magento](https://www.magepal.com/magento2/extensions/catalog-hover-image-for-magento.html)
- [Enhanced Success Page for Magento 2](https://www.magepal.com/magento2/extensions/enhanced-success-page.html)
- [Enhanced Transactional Emails for Magento 2](https://www.magepal.com/magento2/extensions/enhanced-transactional-emails.html)
- [Google Tag Manager](https://www.magepal.com/magento2/extensions/google-tag-manager.html) 
- [Enhanced E-commerce](https://www.magepal.com/magento2/extensions/enhanced-ecommerce-for-google-tag-manager.html) 
- [Reindex](https://www.magepal.com/magento2/extensions/reindex.html) 
- [Custom Shipping Method](https://www.magepal.com/magento2/extensions/custom-shipping-rates-for-magento-2.html) 
- [Preview Order Confirmation](https://www.magepal.com/magento2/extensions/preview-order-confirmation-page-for-magento-2.html)
- [Guest to Customer](https://www.magepal.com/magento2/extensions/guest-to-customer.html) 
- [Admin Form Fields Manager](https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html) 
- [Customer Dashboard Links Manager](https://www.magepal.com/magento2/extensions/customer-dashboard-links-manager-for-magento-2.html) 
- [Lazy Loader](https://www.magepal.com/magento2/extensions/lazy-load.html) 
- [Order Confirmation Page Miscellaneous Scripts](https://www.magepal.com/magento2/extensions/order-confirmation-miscellaneous-scripts-for-magento-2.html)
- [HTML Minifier for Magento2](https://www.magepal.com/magento2/extensions/html-minifier.html)

© MagePal LLC. | [www.magepal.com](https://www.magepal.com)
