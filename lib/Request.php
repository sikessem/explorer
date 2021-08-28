<?php namespace SIKessEm\Protocom;

class Request {

	use Getter;

	protected Method $method;

	protected URI $uri;

	protected Headers $headers;

	protected Protocol $protocol;

	public function __construct(string $protocol, string $verb, string $uri, array $headers = [], array $data = []) {
		$this->setMethod($verb, $data);
		$this->setURI($uri);
		$this->setHeaders($headers);
		$this->setProtocol($protocol);
	}

	public function setMethod(string $verb, array $data = []): Method {
		return $this->method = new Method($verb, $data);
	}

	public function setURI(string $uri): URI {
		return $this->uri = new URI($uri);
	}

	public function setHeaders(array $headers = []): Headers {
		return $this->headers = new Headers($headers);
	}

	public function setProtocol(string $protocol): Protocol {
		return $this->protocol = new Protocol($protocol);
	}
}