<?php namespace SIKessEm\Protocom;

class URI {
  
  public function __construct(string $address) {
    $this->setAddress($address);
  }

  public function setAddress(string $address): void {
    $info = parse_url($address);
    $this->scheme = $info['scheme'] ?? '';
    $this->host = $info['host'] ?? '';
    $this->port = $info['port'] ?? '';
    $this->user = $info['user'] ?? '';
    $this->pass = $info['password'] ?? '';
    $this->path = $info['path'] ?? '';
    $this->query = new Query($info['query'] ?? '');
    $this->fragment = $info['fragment'] ?? '';
  }
}