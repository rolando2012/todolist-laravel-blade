@props(['label'])

<tr>
    <th class="bg-light fw-semibold p-3 text-secondary th-detail">
        {{ $label }}
    </th>
    <td class="p-3 text-dark">
        {{ $slot }}
    </td>
</tr>
