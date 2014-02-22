<?php
$extensionPath = t3lib_extMgm::extPath('t3chimp') . '/';
return array(
    'matoilic\\t3chimp\\controller\\backendcontroller' => $extensionPath . 'Classes/Controller/BackendController.php',
    'matoilic\\t3chimp\\controller\\subscriptionscontroller' => $extensionPath . 'Classes/Controller/SubscriptionsController.php',
    'matoilic\\t3chimp\\core\\bootstrap' => $extensionPath . 'Classes/Core/Bootstrap.php',
    'matoilic\\t3chimp\\domain\\model\\frontenduser' => $extensionPath . 'Classes/Domain/Model/FrontendUser.php',
    'matoilic\\t3chimp\\domain\\repository\\countryrepository' => $extensionPath . 'Classes/Domain/Repository/CountryRepository.php',
    'matoilic\\t3chimp\\domain\\repository\\frontenduserrepository' => $extensionPath . 'Classes/Domain/Repository/FrontendUserRepository.php',
    'matoilic\\t3chimp\\hook\\cache' => $extensionPath . 'Classes/Hook/Cache.php',
    'matoilic\\t3chimp\\mailchimp\\field\\abstractfield' => $extensionPath . 'Classes/MailChimp/Field/AbstractField.php',
    'matoilic\\t3chimp\\mailchimp\\field\\action' => $extensionPath . 'Classes/MailChimp/Field/Action.php',
    'matoilic\\t3chimp\\mailchimp\\field\\address' => $extensionPath . 'Classes/MailChimp/Field/Address.php',
    'matoilic\\t3chimp\\mailchimp\\field\\birthday' => $extensionPath . 'Classes/MailChimp/Field/Birthday.php',
    'matoilic\\t3chimp\\mailchimp\\field\\checkboxes' => $extensionPath . 'Classes/MailChimp/Field/Checkboxes.php',
    'matoilic\\t3chimp\\mailchimp\\field\\date' => $extensionPath . 'Classes/MailChimp/Field/Date.php',
    'matoilic\\t3chimp\\mailchimp\\field\\dropdown' => $extensionPath . 'Classes/MailChimp/Field/Dropdown.php',
    'matoilic\\t3chimp\\mailchimp\\field\\email' => $extensionPath . 'Classes/MailChimp/Field/Email.php',
    'matoilic\\t3chimp\\mailchimp\\field\\helper\\choice' => $extensionPath . 'Classes/MailChimp/Field/Helper/Choice.php',
    'matoilic\\t3chimp\\mailchimp\\field\\helper\\countrychoice' => $extensionPath . 'Classes/MailChimp/Field/Helper/CountryChoice.php',
    'matoilic\\t3chimp\\mailchimp\\field\\helper\\multichoice' => $extensionPath . 'Classes/MailChimp/Field/Helper/MultiChoice.php',
    'matoilic\\t3chimp\\mailchimp\\field\\imageurl' => $extensionPath . 'Classes/MailChimp/Field/Imageurl.php',
    'matoilic\\t3chimp\\mailchimp\\field\\interestgrouping' => $extensionPath . 'Classes/MailChimp/Field/InterestGrouping.php',
    'matoilic\\t3chimp\\mailchimp\\field\\number' => $extensionPath . 'Classes/MailChimp/Field/Number.php',
    'matoilic\\t3chimp\\mailchimp\\field\\patternbased' => $extensionPath . 'Classes/MailChimp/Field/PatternBased.php',
    'matoilic\\t3chimp\\mailchimp\\field\\phone' => $extensionPath . 'Classes/MailChimp/Field/Phone.php',
    'matoilic\\t3chimp\\mailchimp\\field\\radio' => $extensionPath . 'Classes/MailChimp/Field/Radio.php',
    'matoilic\\t3chimp\\mailchimp\\field\\text' => $extensionPath . 'Classes/MailChimp/Field/Text.php',
    'matoilic\\t3chimp\\mailchimp\\field\\url' => $extensionPath . 'Classes/MailChimp/Field/Url.php',
    'matoilic\\t3chimp\\mailchimp\\field\\zip' => $extensionPath . 'Classes/MailChimp/Field/Zip.php',
    'matoilic\\t3chimp\\mailchimp\\field' => $extensionPath . 'Classes/MailChimp/Field.php',
    'matoilic\\t3chimp\\mailchimp\\form' => $extensionPath . 'Classes/MailChimp/Form.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigns' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Campaigns.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\ecomm' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Ecomm.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\error' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\httperror' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\validationerror' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\servererrormethodunknown' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\servererrorinvalidparameters' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\unknownexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\requesttimedout' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\zenduriexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\pdoexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\avestadbexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\xmlrpc2exception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\xmlrpc2faultexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\toomanyconnections' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\parseexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userunknown' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userdisabled' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userdoesnotexist' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usernotapproved' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidapikey' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userundermaintenance' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidappkey' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidip' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userdoesexist' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userinvalidrole' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\userinvalidaction' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usermissingemail' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usercannotsendcampaign' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usermissingmoduleoutbox' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usermodulealreadypurchased' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usermodulenotpurchased' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\usernotenoughcredit' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\mcinvalidpayment' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listdoesnotexist' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidinterestfieldtype' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidoption' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidunsubmember' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidbouncemember' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listalreadysubscribed' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listnotsubscribed' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidimport' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\mcpastedlistduplicate' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\mcpastedlistinvalidimport' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\emailalreadysubscribed' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\emailalreadyunsubscribed' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\emailnotexists' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\emailnotsubscribed' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listmergefieldrequired' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listcannotremoveemailmerge' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listmergeinvalidmergeid' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listtoomanymergefields' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidmergefield' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listinvalidinterestgroup' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\listtoomanyinterestgroups' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigndoesnotexist' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaignstatsnotavailable' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidabsplit' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidcontent' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidoption' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidstatus' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaignnotsaved' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidsegment' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidrss' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidauto' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\mccontentimportinvalidarchive' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaignbouncemissing' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\campaigninvalidtemplate' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidecommorder' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\absplitunknownerror' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\absplitunknownsplittest' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\absplitunknowntesttype' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\absplitunknownwaitunit' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\absplitunknownwinnertype' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\absplitwinnernotselected' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidanalytics' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invaliddatetime' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidemail' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidsendtype' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidtemplate' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidtrackingoptions' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidoptions' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidfolder' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidurl' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\moduleunknown' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\monthlyplanunknown' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\ordertypeunknown' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidpaginglimit' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\invalidpagingstart' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\maxsizereached' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\mcsearchexception' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Error.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\folders' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Folders.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\gallery' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Gallery.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\helper' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Helper.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\lists' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Lists.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\mobile' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Mobile.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\neapolitan' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Neapolitan.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\reports' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Reports.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\templates' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Templates.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\users' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Users.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi\\vip' => $extensionPath . 'Classes/MailChimp/MailChimpApi/Vip.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpapi' => $extensionPath . 'Classes/MailChimp/MailChimpApi.php',
    'matoilic\\t3chimp\\mailchimp\\mailchimpexception' => $extensionPath . 'Classes/MailChimp/MailChimpException.php',
    'matoilic\\t3chimp\\provider\\flexformvalues' => $extensionPath . 'Classes/Provider/FlexFormValues.php',
    'matoilic\\t3chimp\\provider\\session' => $extensionPath . 'Classes/Provider/Session.php',
    'matoilic\\t3chimp\\provider\\settings' => $extensionPath . 'Classes/Provider/Settings.php',
    'matoilic\\t3chimp\\scheduler\\base' => $extensionPath . 'Classes/Scheduler/Base.php',
    'matoilic\\t3chimp\\scheduler\\request' => $extensionPath . 'Classes/Scheduler/Request.php',
    'matoilic\\t3chimp\\scheduler\\syncbackfrommailchimpfieldprovider' => $extensionPath . 'Classes/Scheduler/SyncBackFromMailChimpFieldProvider.php',
    'matoilic\\t3chimp\\scheduler\\is' => $extensionPath . 'Classes/Scheduler/SyncToMailChimpFieldProvider.php',
    'matoilic\\t3chimp\\scheduler\\syncbackfrommailchimptask' => $extensionPath . 'Classes/Scheduler/SyncBackFromMailChimpTask.php',
    'matoilic\\t3chimp\\scheduler\\synctomailchimpfieldprovider' => $extensionPath . 'Classes/Scheduler/SyncToMailChimpFieldProvider.php',
    'matoilic\\t3chimp\\scheduler\\synctomailchimptask' => $extensionPath . 'Classes/Scheduler/SyncToMailChimpTask.php',
    'matoilic\\t3chimp\\service\\fileupload\\filepartiallyuploadedexception' => $extensionPath . 'Classes/Service/FileUpload/FilePartiallyUploadedException.php',
    'matoilic\\t3chimp\\service\\fileupload\\filetoolargeexception' => $extensionPath . 'Classes/Service/FileUpload/FileTooLargeException.php',
    'matoilic\\t3chimp\\service\\fileupload\\invalidextensionexception' => $extensionPath . 'Classes/Service/FileUpload/InvalidExtensionException.php',
    'matoilic\\t3chimp\\service\\fileupload\\nofileuploadedexception' => $extensionPath . 'Classes/Service/FileUpload/NoFileUploadedException.php',
    'matoilic\\t3chimp\\service\\fileupload' => $extensionPath . 'Classes/Service/FileUpload.php',
    'matoilic\\t3chimp\\service\\mailchimp' => $extensionPath . 'Classes/Service/MailChimp.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\abstractformfieldviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/AbstractFormFieldViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\addressfieldviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/AddressFieldViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\addressline1viewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/AddressLine1ViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\addressline2viewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/AddressLine2ViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\cityviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/CityViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\countrylistviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/CountryListViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\stateviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/StateViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\address\\zipcodeviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Address/ZipCodeViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\birthday\\dayviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Birthday/DayViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\birthday\\monthviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/Birthday/MonthViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\checkboxviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/CheckboxViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\to' => $extensionPath . 'Classes/ViewHelpers/Form/UploadViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\errorsviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/ErrorsViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\formfieldviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/FormFieldViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\numberviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/NumberViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\radioviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/RadioViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\remainingfieldsviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/RemainingFieldsViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\selectviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/SelectViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\textareaviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/TextAreaViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\textfieldviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/TextfieldViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\form\\uploadviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/UploadViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\formviewhelper' => $extensionPath . 'Classes/ViewHelpers/FormViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\renderpartialviewhelper' => $extensionPath . 'Classes/ViewHelpers/RenderPartialViewHelper.php',
    'matoilic\\t3chimp\\viewhelpers\\writablearguments' => $extensionPath . 'Classes/ViewHelpers/WritableArguments.php',
);
