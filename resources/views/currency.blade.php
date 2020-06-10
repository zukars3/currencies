<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Currency</th>
                    <th scope="col">{{ $currencies[2]->date }}</th>
                    <th scope="col">{{ $currencies[1]->date }}</th>
                    <th scope="col">{{ $currencies[0]->date }}</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        {{ $currencies[0]->name }}
                    </td>
                    <td>{{ $currencies[2]->value }}</td>
                    <td>{{ $currencies[1]->value }}</td>
                    <td>{{ $currencies[0]->value }}</td>
                </tr>

                </tbody>
            </table>
            <a href="{{ route('home') }}" class="btn btn-responsive btn-danger">Back</a>
        </div>
    </div>
</div>
