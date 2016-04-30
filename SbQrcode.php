<?php
namespace sangbima\sbqrcode;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\Output\QRImage;

/**
 *
 */
class SbQrcode
{

  public function init()
  {
    return "testttt";
  }

  public function test($data)
  {
    // $qr = new QRCode();

    return '<img src="'.(new QRCode($data, new QRImage))->output().'" />';
  }
}
