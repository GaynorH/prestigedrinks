Installation :
- Before installing the extension, please:
1. Enable the cache by going to Backend -> System -> Cache Management 
2. Disable Compilation by going to Backend -> System -> Tool -> Compilation
3. If your website is live, please backup your store database and web directory.

- The extension includes 2 packages: Mcore package and SocialGift package. You need to install Mcore at first.
+ Mcore Installation
- Extract the Mcore zip file
- Use your favorite FTP/SFTP/SCP client (Filezilla, WinScp…) and upload the extracted folders directly into the root of your Magento installation.

+ Social Gift Installation
- Extract the SocialGift zip file
- Upload the extracted folders (/app, /js, /skin) directly into the root of your Magento installation.
- From the backend, refresh cache at System => Cache Management. Log out and log in back.

* Note : If you are using custom package for your theme (not default package in magento 1.5.x, 1.6.x, 1.7.x, 1.8.x, not rwd package in magento 1.9.x, not enterprise package in magento Enterprise), you need to do following steps:
- Step 1: Go to folder by path: app/design/frontend/default/default (or by path: app/design/frontend/enterprise/default if you are using magento EE), you will see the folders (/layout, /template) then upload these folders directly into your theme by path: app/design/frontend/your _package/your_theme
- Step 2: Go to folder by path: skin/frontend/default/default (or by path: skin/frontend/enterprise/default if you are using magento EE), after that upload the folder ‘mw_freegift’ into your theme by path: skin/frontend/your_package/your_theme

License Activation:
- To activate the extension, please follow this instruction

* Note that:
- If you get a blank page or a “Access denied” message when clicking the License Activation or Free Gift link in the left menu, please Go to System -> Cache Management and refresh cache , log out from the Admin Panel and then login back.

Uninstallation:
- After installing, if the module causes any damage to your site, quickly uninstall by turning off the MW_FreeGift.xml file at app/etc/modules (simply change the file name).
You must remove the syntax codes that you inserted into the list.phtml file (at the step of displaying free gifts and free gift label on catalog – page 9 and 11).
For any problem, please contact us via http://www.mage-world.com/contacts

Upgrade:
- Simply overwrite all the old files, flush cache, and then log out and log in again from the admin page (it is important to update database properly).

* Note Note:
- We will be happy to install your new extension within 1 business day for a minimal fee. To request installation please submit a ticket at http://www.mage-world.com/contacts/ and select 'installation' from the drop down list.



Display Social Sharing box in cart page:
- To display Box social sharing in the shopping cart page, please follow these directions:
+ Please go to: app\design\frontend\<your_package>\<your_theme>\template\checkout\cart.phtm
+ Find the syntax code: 
<?php echo $this->getChildHtml('coupon') ?>
+ Copy the code below and paste above the code above: 
<?php echo $this->getChildHtml('checkout.cart.social') ?>