@component('mail::message')

    以下のサブスクが支払い更新日{{$days_to_payment_date}}日前です。

@component('mail::table')
| 契約中サブスク       | {{$cycle}}額料金      | 支払日       |
| :------------- |:-------------| :--------|
| {{$name}}      | {{$price}}円      | {{$payment_date}}     |
@endcomponent

@endcomponent
