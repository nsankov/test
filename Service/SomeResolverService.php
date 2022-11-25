<?php
class SomeResolverService
{
	private $api;
	private $account;

	public function __construct(Api $api, Account $account)
	{
		$this->api	 = $api;
		$this->account   = $account;
	}

	public function getContent()
	{
		return $this->api->getData()['data'];
	}

	public function checkAllow($signatere)
	{
		$content = $this->getContent()
		$key = $this->account->getConfig()['key'];
		return openssl_verify($content, $signature, $key);
	}
}
