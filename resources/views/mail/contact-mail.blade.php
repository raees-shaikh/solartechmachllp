@component('mail::message')
    - **Details**:
    - **Name**: {{ $data->name }}
    - **Email**: {{ $data->email }}
    - **Subject**: {{ $data->subject }}
    - **Phone no.**: {{ $data->phone }}
    - **Message**: {{ $data->message }}
@endcomponent
