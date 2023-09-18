<?php

$service = new \Rebilly\Sdk\UsersService($client);

$usersPaginator = $service->users()->getAllPaginator(limit: 5, filter: 'firstName:John');
foreach ($usersPaginator as $usersPage) {
    printf("Users page %d/%d\n", $usersPaginator->key() + 1, $usersPaginator->count());
    foreach ($usersPage as $user) {
        printf("User #%s: %s %s | %s\n", $user->getId(), $user->getFirstName(), $user->getLastName(), $user->getEmail());
    }
}

// OR

$users = $service->users()->getAll(filter: 'firstName:John');
foreach ($users as $user) {
    printf("User #%s: %s %s | %s\n", $user->getId(), $user->getFirstName(), $user->getLastName(), $user->getEmail());
}
