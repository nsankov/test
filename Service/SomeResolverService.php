<?php
class SomeResolverService
{
	private $api;

	public function __construct(Api $api)
	{
		$this->api = $api;
	}

	public function getContent()
	{
		return $this->api->getData()['data'];
	}
}
