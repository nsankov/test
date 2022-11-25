class Account
{
	public function getName()
	{
		return 'Name';
	}

	public function getConfig()
	{
		$file = file_get_contents(__DIR__ . '/' . 'configs/app.yml');
		if (!$file) {
			throw new Exception('No file');
		}
		return $file;
	}
}
