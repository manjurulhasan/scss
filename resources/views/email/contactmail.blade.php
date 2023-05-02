@include('email.inc.header')
<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background: #ffffff;" >
    <tr>
        <td width="48"></td>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        <div style="font-weight: 400; font-size: 14px; color: #000000;">Dear Admin,</div>
                    </td>
                </tr>
                <tr><td height="20"></td></tr>
                <tr>
                    <td>
                        <div style="font-weight: 400; font-size: 14px; color: #000000;">
                            {{ ucfirst( $payload['first_name'] ) }} {{ ucfirst( $payload['last_name'] ) }} has been contact with you.<br/>
                            Email is: {{ $payload['email'] }} , Phone: {{ $payload['phone'] }} and message is: {{ $payload['message'] }}.
                        </div>
                    </td>
                </tr>
                <tr><td height="40"></td></tr>
            </table>
        </td>
        <td width="48"></td>
    </tr>
</table>
<!--top part ends-->

@include('email.inc.footer')
