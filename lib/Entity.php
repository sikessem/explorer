<?php namespace SIKessEm\Protocom;

abstract class Entity {

	use Getter;

	function __construct(protected Authority $authority) {}
}