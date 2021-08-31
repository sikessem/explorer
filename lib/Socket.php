<?php namespace SIKessEm\Protocom;

class Socket {

  function __construct(protected Server $server, protected Protocol $protocol) {}
}
