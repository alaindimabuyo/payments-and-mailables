<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul>
            @forelse ($notifications as $notification)
               <li>
                   @if ($notification->type === 'App\Notification\PaymentReceived')
                       We have received a payment of ${{$notification->data['amount'] / 100}} from you.
                   @endif
                </li> 
            @empty
                <li>You have no notifications</li>
            @endforelse
        </ul>
    </div>
</body>
</html>