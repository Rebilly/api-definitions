$fileForm = new Rebilly\Entities\File();
$fileForm->setDescription('This is a test file');

try {
    $file = $client->files()->update('fileId', $fileForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
