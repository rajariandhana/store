<div>
    <div>
        <label for="startDate">Start Date:</label>
        <input type="date" wire:model="startDate" id="startDate">
    </div>

    <div>
        <label for="endDate">End Date:</label>
        <input type="date" wire:model="endDate" id="endDate">
    </div>

    {{-- <div>
        <label for="status">Status:</label>
        <select wire:model="status" id="status">
            <option value="">All</option>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
        </select>
    </div> --}}

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
