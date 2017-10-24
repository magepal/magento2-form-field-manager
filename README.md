## Customer and Address Form Fields Manager for Magento2
Quickly and easily remove unwanted form fields from admin order creation and customer account, added by default magento or other third party extensions

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

#### 1 - Installation Customer Account Links Manager
##### Manually
 * Download the extension
 * Unzip the file
 * Create a folder {Magento 2 root}/app/code/MagePal/FormFieldManager
 * Copy the content from the unzip folder

##### Using Composer

```
composer require magepal/magento2-formfieldmanager
```

#### 2 - Enable Customer Account Links Manager (from {Magento root} folder)
 * php -f bin/magento module:enable --clear-static-content MagePal_FormFieldManager
 * php -f bin/magento setup:upgrade

#### 3 - Configure Customer Account Links Manager

Log into your Magento 2 Admin, then goto Stores -> Configuration -> MagePal -> Form Field Manager

![image](https://user-images.githubusercontent.com/1415141/31972382-717b22a6-b8ee-11e7-8549-934d87ed01b1.png)

### After (Admin order creation)
![image](https://user-images.githubusercontent.com/1415141/31972782-5de22300-b8f0-11e7-8330-8e056d072e4b.png)

----

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.
