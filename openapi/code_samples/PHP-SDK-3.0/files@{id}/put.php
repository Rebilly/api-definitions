$service = new Rebilly\Sdk\CoreService($client);
$fileForm = new Rebilly\Sdk\Model\File();
$fileForm->setDescription('This is a test file');

$file = $service->files()->update('fileId', $fileForm);
