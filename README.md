# Qr Helper

Simple displaying of QR codes.
See http://code.google.com/apis/chart/docs/gallery/qr_codes.html for more infos.

For CakePHP 2.0

Includes functions to create QR codes for:
* free text
* contacts
* email sending
* calendar events
* Geolocations
* Android Market Searches
* MMS sending
* SMS sending
* Telephone calls
* URLs

## Usage

Download and extract into `app/Plugin/Qr`

OR

`cd` into your app folder and run: git clone git://github.com/shama/qr.git Plugin/Qr

## Examples

In the view for example do "<? echo $this->Qrcode->text('Hello World'); ?>"

Second parameter always is an optional option array. For explanation of these options and the required parameter for each function read the well documented Code. :)