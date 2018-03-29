<a href="http://www.magepal.com" ><img src="https://image.ibb.co/dHBkYH/Magepal_logo.png" width="100" align="right" /></a>

## Customer and Address Form Fields Manager for Magento2
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
  
## Installation
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

© MagePal LLC. | www.magepal.com
