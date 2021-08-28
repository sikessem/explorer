<?php namespace SIKessEm\Protocom;

class Headers {

  use Getter;

  public function __construct(array $list) {
    $this->setList($list);
  }

  protected array $list;

  public function addList(array $list): self {
    foreach($list as $name => $value) $this->add($name, $value);
    return $this;
  }

  public function setList(array $list, bool $set_all = true): self {
    if($set_all) $this->list = [];
    foreach($list as $name => $value) $this->set($name, $value);
    return $this;
  }

  public function add(string $name, string $value): self {
    if(isset($this->list[$name])) $this->set($name, $value);
    return $this;
  }

  public function set(string $name, string $value): self {
    $name = self::format($name);
    $this->list[$name] = $value;
    return $this;
  }

  public function get(string $name): ?string {
    return $this->list[$name] ?? null;
  }

  public function reset(): this {
    $this->list = [];
    return $this;
  }

  public function isset(string $name): bool {
    return isset($this->list[$name]);
  }

  public function unset(string $name): this {
    unset($this->list[$name]);
    return $this;
  }

  static function format(string $key): string {
    return implode('-', array_map(fn($key) => ucfirst(strtolower($key)), explode('_', $key)));
  }
}