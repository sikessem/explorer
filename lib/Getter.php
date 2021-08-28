<?php namespace SIKessEm\Protocom;

class Getter {

	public function __get(string $name): mixed {
		return $this->$name ?? null;
	}
}