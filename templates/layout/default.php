<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$bookIcon = file_get_contents(WWW_ROOT . '/icons/book.svg');
$userIcon = file_get_contents(WWW_ROOT . '/icons/user.svg');
$registryIcon = file_get_contents(WWW_ROOT . '/icons/registry.svg');
$logoIcon = file_get_contents(WWW_ROOT . '/icons/logo.svg');
?>

<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Roboto:wght@400;700&family=Raleway:400,700&display=swap" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', "styles"]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div class="container">
        <nav class="my-navbar-container">
            <a href="<?= $this->Url->build('/') ?>" class="my-logo">
                <?= $logoIcon ?>
                <div>
                    <h1>Health & Safety</h1>
                    <h2 class="my-text">Empresa Contratante</h2>
                </div>
            </a>
            <div class="my-navbar">
                <?= $this->Html->link(
                    $this->Html->tag('span', $bookIcon, ['class' => 'my-icon']) . '<p class="my-text my-text-bold">Livros</p>',
                    ['controller' => 'books', 'action' => 'index'],
                    ['escape' => false]
                ) ?>
                <?= $this->Html->link(
                    $this->Html->tag('span', $userIcon, ['class' => 'my-icon']) . '<p class="my-text my-text-bold">Clientes</p>',
                    ['controller' => 'customers', 'action' => 'index'],
                    ['escape' => false]
                ) ?>
                <?= $this->Html->link(
                    $this->Html->tag('span', $registryIcon, ['class' => 'my-icon']) . '<p class="my-text my-text-bold">Registros</p>',
                    ['controller' => 'booksRentedByCustomers', 'action' => 'index'],
                    ['escape' => false]
                ) ?>
            </div>
        </nav>
    </div>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>