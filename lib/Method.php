<?php namespace SIKessEm\Protocom;

class Method {

  use Getter;
  
  public function __construct(string $verb, array $data) {
    $this->verb = self::sanitize($verb);
    $this->data = $data;
  }

  protected array $data = [];

  protected string $verb;
  
  public function is(string $verb): bool {
    return $this->verb === self::sanitize($verb);
  }

  public function in(array $verbs): bool {
    foreach($verbs as $verb)
      if($this->is($verb))
        return true;
    return false;
  }

  public function has(string|int $key): bool {
    return isset($this->data[$key]);
  }

  public function hasOneOf(array $keys): bool {
    foreach($keys as $key)
      if($this->has($key))
        return true;
    return false;
  }

  public function hasAll(array $keys): bool {
    foreach($keys as $key)
      if(!$this->has($key))
        return false;
    return true;
  }

  public function forAny(callable $make, array $keys = []): self {
    if(empty($keys)) $keys = array_keys($this->data);
    foreach($keys as $key)
      if($this->has($key))
        $this->data[$key] = $make($this->get($key), $key);
    return $this;
  }

  public function get(string|int $key): mixed {
    return $this->data[$key] ?? null;
  }

  public static function sanitize(string $verb): string {
    return strtoupper(trim($verb));
  }
}