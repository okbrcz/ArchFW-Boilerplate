<?php
/**
 * ArchFramework (ArchFW in short) is universal template for server-side rendered applications and services.
 * ArchFW comes with pre-installed router and JSON API functionality.
 * Visit https://github.com/archi-tektur/ArchFW/ for more info.
 *
 * PHP version 7.2
 *
 * @category  Framework/Boilerplate
 * @package   ArchFW
 * @author    Oskar 'archi-tektur' Barcz <kontakt@archi-tektur.pl>
 * @copyright 2018 Oskar 'archi_tektur' Barcz
 * @license   MIT https://opensource.org/licenses/MIT
 * @version   2.8.0
 * @link      https://github.com/archi-tektur/ArchFW/
 */

return [

    /*
     * Directory where view classes are located. Only classes in this directory can be called.
     * With below routingPaths it should create Full Qualified class name to be called.
     */
    'safeClassCalloutPath' => [
        'application' => 'ArchFW\Views\HTMLViews',
        'api'         => 'ArchFW\Views\JSONViews',
    ],

    /*
     * Here are stored class and template names for each route
     */
    'routingPaths'         => [
        'application' => [
            '' => [
                'class'    => 'InitialScreen',
                'template' => 'initial-screen.html.twig',
            ],
        ],
        'api'         => [
            'routerTest' => 'RouterTest',
        ],
    ],

    /*
     Redirect all routes that does not match the above scheme to other, defined above route
     set FALSE to turn off this function
     set STRING with route to turn on this function
    */
    'redirectOnNoMatch'    => '/',
];
