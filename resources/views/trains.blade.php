<main>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Date</th>
                            <th>Arrival Time</th>
                            <th>Departure Time</th>
                            <th>Train Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train['company'] }}</td>
                                <td>{{ $train['arrival'] }}</td>
                                <td>{{ $train['departure'] }}</td>
                                <td>{{ $train['date'] == null ? 'Da stabilire' : '' }}</td>
                                <td>{{ $train['arrival_time'] }}</td>
                                <td>{{ $train['departure_time'] }}</td>
                                <td>{{ $train['train_code'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
