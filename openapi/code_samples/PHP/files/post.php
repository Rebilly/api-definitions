$fileForm = new Rebilly\Entities\File();
$fileForm->setUrl('http://test.com/somefile.jpg');

try {
    $file = $client->files()->create($fileForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
