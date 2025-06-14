@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('/frontend/assets/img/solar-logo.png') }}" class="logo" alt="Solar Logo"
                    style="height: 100px !important; max-height: 100px !important;">
            @endif
        </a>
    </td>
</tr>
