
# PHP-Class-For-GreenWeb-SMS-Api

This is a simple php class file to send sms message using GreenWeb sms api


## GreenWeb Portal

 - [GreenWeb SMS Portal](https://www.greenweb.com.bd/)


## Usage/Examples

Example code for sending sms to single user

```javascript
<?php 

include_once "./SMS.php";

$sms = new SMS("YOUR SMS KEY");

$sms->setNumber('01878460662');
$sms->setContent("Test sms message");

$result = $sms->sendSms();

print_r($result);

?>
```

Example code for sending sms to multiple users.

```javascript
<?php 

include_once "./SMS.php";

$sms = new SMS("YOUR SMS KEY");

$sms->setNumbers(['01878460662']); //you have to call setNumbers and have to pass an array as argument
$sms->setContent("Test sms message");

$result = $sms->sendSms();

print_r($result);

?>
```




## Running Tests

To run the script, enter the project url in browser 

```bash
  http://localhost/folder-name/yourfilename.php
```


## Feedback

If you have any feedback, please reach out to me at pranaycb.ctg@gmail.com

