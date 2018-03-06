<?php

namespace App\Controllers;

use Mailgun\Mailgun;
use App\Controllers\Controller;
use Symfony\Component\Yaml\Yaml;

class HomeController extends Controller
{
    public function index($request, $response, $args)
    {
        $content = Yaml::parse(file_get_contents(__DIR__ . '/../../resources/content/home.yaml'));
        
        return $this->c->view->render($response, 'home.twig', compact('content'));
    }

    public function post($request, $response, $args)
    {
        $params = $request->getParams();

        $mg = Mailgun::create('key-1715c074f053673f6e3c4c79e8595390');

        $mg->messages()->send('iamdowntownwindsor.com', [
            'from' => 'info@iamdowntownwindsor.com',
            'to' => 'corbettproductions@me.com',
            'subject' => 'A new submission from iamdowntownwindsor.com',
            'html' => "Contact Name: {$params['contact-name']} <br> Phone Number: {$params['phone']} <br> Email: {$params['email']} <br> Group Name: {$params['group-name']} <br> Party Date: {$params['party-date']} <br> Size of party: {$params['size-of-party']} <br> Message: {$params['help']}"
        ]);

        $mg->messages()->send('iamdowntownwindsor.com', [
            'from' => 'info@iamdowntownwindsor.com',
            'to' => 'christiankomsa@me.com',
            'subject' => 'A new submission from iamdowntownwindsor.com',
            'html' => "Contact Name: {$params['contact-name']} <br> Phone Number: {$params['phone']} <br> Email: {$params['email']} <br> Group Name: {$params['group-name']} <br> Party Date: {$params['party-date']} <br> Size of party: {$params['size-of-party']} <br> Message: {$params['help']}"
        ]);

        $mg->messages()->send('iamdowntownwindsor.com', [
            'from' => 'info@iamdowntownwindsor.com',
            'to' => 'lucasmcconnell22@gmail.com',
            'subject' => 'A new submission from iamdowntownwindsor.com',
            'html' => "Contact Name: {$params['contact-name']} <br> Phone Number: {$params['phone']} <br> Email: {$params['email']} <br> Group Name: {$params['group-name']} <br> Party Date: {$params['party-date']} <br> Size of party: {$params['size-of-party']} <br> Message: {$params['help']}"
        ]);
    }
}
