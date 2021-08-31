<?php namespace SIKessEm\Protocom;

abstract class Client extends Entity {

  abstract  function fetch(Request $request): Response;
}