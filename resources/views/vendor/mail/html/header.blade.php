<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://worldwidesvc.com/images/icons/logo-vendor.png" class="logo" alt="Worldwide">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
