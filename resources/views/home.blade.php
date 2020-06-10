<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            @if(count($currencies) <= 0)
                <div id="empty">
                    <h1>There are no currencies available for now!</h1>
                    <h3>Try updating currencies list</h3>
                </div>
            @else
                <div class="row d-flex justify-content-center">
                    {{ $currencies->links() }}
                </div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Currency</th>
                        <th scope="col">Value</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($currencies as $currency)
                        <tr>
                            <td>
                                <form id="distinct" action="{{ route('distinct') }}" method="post">
                                    @csrf
                                    <input type="hidden" id="currency" name="currency" value="{{ $currency->name }}">
                                    <button class="btn btn-responsive btn-outline-primary"
                                            type="submit">{{ $currency->name }}</button>
                                </form>
                            </td>
                            <td>{{ $currency->value }}</td>
                            <td>{{ $currency->date }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="row d-flex justify-content-center">
                    {{ $currencies->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    #empty {
        margin-top: 10%;
    }
</style>
