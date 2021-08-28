<?php namespace SIKessEm\Protocom;

trait Getter {

	public function __isset(string $name): bool {
		return isset($this->$name);
	}

	public function __get(string $name): mixed {
		return $this->$name ?? null;
	}
}