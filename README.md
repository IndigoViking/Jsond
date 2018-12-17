# Json'd plugin for Craft CMS 3.x

Adds Twig filters for working with json.

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require indigoviking/jsond

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Json'd.

## Json'd Overview

Json'd adds 3 twig filters: |json_decode , |json_last_error , and |json_last_error_msg .

## Using Json'd

### json_decode

Pass a json string to |json_decode and it will return an object.

`{{ entry.jsonField|json_decode }}`

To return an array instead of an object, pass a parameter of 'true'.

`{{ entry.jsonField|json_decode('true') }}`

|json_decode accepts all of the parameters that the json_decode function in PHP accepts.

`{{ entry.jsonField|json_decode('object/associative', 'depth', 'option') }}`

Object/associative is set to false by default returning an object.
Depth (passed as an integer), sets the depth to which the json is decoded. Default recursion depth in PHP is 512.
Options available are:
	JSON_BIGINT_AS_STRING - Decodes large integers as their original string value.
	JSON_OBJECT_AS_ARRAY - Decodes as array. Default of |json_decode.
	JSON_THROW_ON_ERROR - Throws JsonException if an error occurs instead of setting the global error state that is retrieved with json_last_error().

### json_last_error_msg

Returns the error string of json_decode.

`{{ entry.jsonField|json_last_error_msg }}`

Accepts 'encode' as a parameter to return the error string of json_encode.

`{{ entry.jsonField|json_last_error_msg('encode') }}`

### json_last_error

Returns the last error of json_decode.

`{{ entry.jsonField|json_last_error }}`

Accepts 'encode' as a parameter to return the last error of json_encode.

`{{ entry.jsonField|json_last_error('encode') }}`

## PHP Documentation

To read the full documentation of the PHP functions and their accepted parameters and return values, see these links:

[json_decode](http://php.net/manual/en/function.json-decode.php)
[json_last_error_msg](http://php.net/manual/en/function.json-last-error-msg.php)
[json_last_error](http://php.net/manual/en/function.json-last-error.php)

Brought to you by [The Indigo Viking](https://www.theindigoviking.com)
