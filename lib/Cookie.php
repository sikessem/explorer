<?php namespace SIKessEm\Protocom;

class Cookie {

	use Getter;

	public function __construct(protected string $name, protected mixed $value, protected array $options = []) {}
}