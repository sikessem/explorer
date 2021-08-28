<?php namespace SIKessEm\Protocom;

class Method {

  use Getter;
  
  public function __construct(string $verb, array $data) {
    $this->setVerb($verb)->setData($data);
  }

  protected array $data = [];

  protected string $verb;

  public function setVerb(string $verb): self {
    $this->verb = strtoupper($verb);
    return $this;
  }

  public function setData(array $data): self {
    $this->data = $data;
    return $this;
  }
}