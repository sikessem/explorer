<?php namespace SIKessEm\Protocom;

class Protocol {

	use Getter;
  
  protected string $type;

  protected string $version;

	public function __construct(string $name) {
    $this->setName($name);
	}

  public function setName(string $name): self {
    if(preg_match('/^([A-Z]+)\/([1-9]+(?:\.[0-9]+)?)$/', $name, $matches)) {
      $this->type = $matches[1];
      $this->version = $matches[2];
      return $this;
    }
  }
}