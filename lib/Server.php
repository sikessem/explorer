<?php namespace SIKessEm\Protocom;

abstract class Server extends Entity {

  abstract  function serve(Request $request): Response;
}