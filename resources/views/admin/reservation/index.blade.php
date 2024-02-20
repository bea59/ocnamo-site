@extends('base')

@section('title', 'Admin - Réservation - Index')

@section('content')
<section class="en-dessous">

    <h2>Admin - Réservation - Index</h2>
    <div>
        <a href="{{route('admin.reservation.create')}}">Créer une résarvation</a>
    </div>

    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>couverts</th>
            <th>heure</th>
            <th>jour</th>
            <th>telephone</th>
            <th>commentaires</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
        @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->nom }}</td>
                <td>{{ $reservation->couverts }}</td>
                <td>{{ $reservation->heures }}</td>
                <td>{{ $reservation->jours }}</td>
                <td>{{ $reservation->telephone }}</td>
                <td>{{ $reservation->commentaires }}</td>
                <td>{{ $reservation->created_at }}</td>
                <td>{{ $reservation->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.reservation.show',['id' =>
                    $reservation->id])}}">Voir</a>
                    <a href="{{ route('admin.reservation.edit',['id' =>
                    $reservation->id])}}">Modifier</a>
                    <form action="{{ route('admin.reservation.delete', ['id'  => $reservation->id])}}" method="post"
                    onsubmit="return confirm('Supprimer cet élément ?')">                       
                        @csrf
                        @method('DELETE')
                        <button class="color-b" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</section>
@endsection