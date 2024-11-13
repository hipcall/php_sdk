# Hipcall PHP SDK

Official Hipcall API Wrapper written in PHP.

## Installation

```bash
pip install hipcall/hipcall_sdk
```
## Use

```php
require 'vendor/autoload.php';

use Hipcall\HipcallClient;

$token = 'BARIER_TOKEN';
$client = new HipcallClient($token);

// Get calls
$response = $client->getEndpoint('calls?limit=5&offset=0');
print_r($response);

// Call and Bridge
$data = [
    'callee_number' => '+905326202911',
    'number_id' => 1,
];

$response = $client->postEndpoint('extensions/1234/call', $data);
print_r($response);
```

## Roadmap

- [ ] Task
- [ ] Phone system - call
- [ ] Phone system - extensions
- [ ] Phone system - greetings
- [ ] Phone system - numbers
- [ ] Phone system - teams
- [ ] Phone system - users
- [ ] Phone system - voicemails
- [ ] Contact centre
- [ ] Sales 
- [ ] Account


All [Hipcall](https://www.hipcall.com/en-gb/) libraries:

- [HipcallDisposableEmail](https://github.com/hipcall/hipcall_disposable_email) - Simple library checking the email's domain is disposable or not.
- [HipcallDeepgram](https://github.com/hipcall/hipcall_deepgram) - Unofficial Deepgram API Wrapper written in Elixir.
- [HipcallOpenai](https://github.com/hipcall/hipcall_openai) - Unofficial OpenAI API Wrapper written in Elixir.
- [HipcallWhichtech](https://github.com/hipcall/hipcall_whichtech) - Find out what the website is built with.
- [HipcallSDk](https://github.com/hipcall/elixir_sdk) - Official Hipcall API Wrapper written in Elixir.
- [HipcallPythonSdk](https://github.com/hipcall/python_sdk) - Official Hipcall API Wrapper written in Python.


