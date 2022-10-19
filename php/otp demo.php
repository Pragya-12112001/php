<?phprequire "./vendor/autoload.php";
  use Courier\CourierClient;

    $courier = new CourierClient("https://api.courier.com/", "YOUR_AUTH_TOKEN_HERE");

    $result = $courier->sendEnhancedNotification(
      (object) [
        'to' => [
          'phone_number' => "RECIPIENT NUMBER HERE",
        ],
        'template' => "F3Q0EWXH5W4S70H4CS99695STCYX",
        'data' => [
          'recipientName' => "Indrajith",
        ],
      ],
    );
    echo( $result->requestId );
?>
