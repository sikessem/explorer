<?php namespace SIKessEm\Protocom;

class Request {

	use Getter;

	public function __construct(protected Method $method, protected URI $uri, protected Protocol $protocol, protected Headers $headers) {}
}