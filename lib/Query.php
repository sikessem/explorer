<?php namespace SIKessEm\Protocom;

class Query {

  use Getter;
  
  public function __construct(string $text) {
    $this->setText($text);
  }

  protected array $data = [];
  
  public function setText(string $text): self {
    parse_str($text, $this->data);
    return $this;
  }

  public function __toString() {
    return http_build_query($this->data);
  }
}