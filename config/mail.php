<?php
return [
  "driver" => "smtp",
  "host" => env('MAIL_HOST','smtp.mailtrap.io'),
  "port" => env('MAIL_PORT', 2525),
  "from" => array(
      "address" => env('MAIL_FROM_ADDRESS', 'from@example.com'),
      "name" => env('MAIL_FROM_NAME', 'Example')
  ),
  "username" => env('MAIL_USERNAME', '3a3da837c34d1b'),
  "password" => env('MAIL_PASSWORD', '4d595b31b0d1bf'),
];

