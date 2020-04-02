$websiteForm = new Rebilly\Entities\Website();
$websiteForm->setName('TestWebsite');
$websiteForm->setUrl('http://testwebsite.com');
$websiteForm->setServicePhone('+0123456789');
$websiteForm->setServiceEmail('test@testwebsite.com');

try {
    $website = $client->websites()->update('websiteId', $websiteForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
