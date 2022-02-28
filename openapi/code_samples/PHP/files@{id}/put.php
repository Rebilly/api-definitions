$fileForm = new Rebilly\Entities\File();
$fileForm->setDescription('This is a test file');

try {
    $file = $client->files()->update('fileId', $fileForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
