<?php namespace SIKessEm\Protocom;

class Authority {

	use Getter;

	function __construct(protected string $host, protected int $port, protected ?string $username = null, protected ?string $password = null) {}
}