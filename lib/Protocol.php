<?php namespace SIKessEm\Protocom;

class Protocol {

	use Getter;
  
  protected string $scheme;

  protected string $version;

	public function __construct(string $name) {
    if(preg_match('/^([A-Z]+)\/([1-9]+(?:\.[0-9]+)?)$/', $name, $matches)) {
      $this->scheme = $matches[1];
      $this->version = $matches[2];
    }
	}
}