@include("common/nav")
 
<br><br>
<h2>Videojuego</h2>
<div class="container">
<div class="row">

    <table>
        <tr>
            <th>
                Posteo
            </th>
        </tr>
        @foreach($posteo as $posteo)

            <tr>
                <td>
                    {{ $posteo -> posteo }}
                </td>
            </tr>

        @endforeach
    </table>
</div>