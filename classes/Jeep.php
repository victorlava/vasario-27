<?php

class Jeep extends Car {

  public $suvType; // miesto... bekeles


  public function __construct(array $settings) {

    $this->setSettings($settings);

  }

}

?>
