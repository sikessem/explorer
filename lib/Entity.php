<?php namespace SIKessEm\Protocom;

abstract class Entity {

	use Getter;

	public function __construct(protected string $host, protected int $port) {}
}