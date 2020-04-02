$fileForm = new Rebilly\Entities\File();
$fileForm->setUrl('http://test.com/somefile.jpg');

try {
    $file = $client->files()->create($fileForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
