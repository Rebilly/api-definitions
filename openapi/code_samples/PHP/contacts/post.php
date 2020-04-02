$contactForm = new Rebilly\Entities\Contact();
$contactForm->setFirstName('Sherlock');
$contactForm->setLastName('Holmes');
$contactForm->setOrganization('TestOrganization');
$contactForm->setEmails(
    [
        [
            'label' => 'main',
            'value' => 'johndoe@testemail.com',
            'primary' => true,
        ],
        [
            'label' => 'secondary',
            'value' => 'otheremail@testemail.com',
        ],
    ]
);
$contactForm->setPhoneNumbers(
    [
        [
            'label' => 'work',
            'value' => '+123456789',
            'primary' => true,
        ],
        [
            'label' => 'home',
            'value' => '+9874654321',
        ],
    ]
);

try {
    $contact = $client->contacts()->create($contactForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
