<!-- resources/views/room_table.blade.php -->
@extends('layouts.app')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tbody tr:hover {
        background-color: #f9f9f9;
    }

    /* Add any additional styling you want for the table */
</style>

@section('content')
<h2>Booking Details</h2>
<table id="roomTable" class="roomTable">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Number</th>
            <th>Price</th>
            <th>Room Code</th>
            <th>Payment Method</th>
            <th>Room Check In</th>
            <th>Room Check Out</th>
            <th>Booking Status</th>
            <th>Payment ID</th>
            <th>Actions</th> <!-- New column for logout button -->
        </tr>
    </thead>
    <tbody>
        @foreach($room_details as $key => $room)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $room->name }}</td>
            <td>{{ $room->email }}</td>
            <td>{{ $room->number }}</td>
            <td>{{ $room->price }}</td>
            <td>{{ $room->room_code }}</td>
            <td>{{ $room->payment_method }}</td>
            <td>{{ $room->check_in }}</td>
            <td>{{ $room->check_out }}</td>
            <td>{{ $room->booking_status }}</td>
            <td>{{ $room->payment_id }}</td>
            <td>
                <button class="logout-btn" data-room-id="{{ $room->id }}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<h2>Room Details</h2>
<table id="roomTable" class="roomTable">
    <thead>
        <tr>
            <th>Room ID</th>
            <th>Room Name</th>
            <th>Room Code</th>
            <th>Price</th>
            <th>Hotal Name</th>
            <th>Room Type</th>
            <th>Total Rooms</th>
            <th style="width: 4%;">Images</th>
            <th>Actions</th> <!-- New column for logout button -->
        </tr>
    </thead>
    <tbody>
        @foreach($room_details1 as $key => $room1)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $room1->name }}</td>
            <td>{{ $room1->room_code }}</td>
            <td>{{ $room1->price }}</td>
            <td>{{ $room1->hotal->name }}</td>
            <td>{{ $room1->RoomType->name }}</td>
            <td>{{ $room1->available_count }}</td>
            <td>
                <img class="img-fluid" src="{{$room1->img}}" alt="" style="width: 115%;margin: 0px 0px 0px 0px;">
            </td>

            <td>
                <button class="logout-btn" data-room-id="{{ $room1->id }}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#roomTable').DataTable();

        // Add event listener for the delete button
        $('.logout-btn').on('click', function() {
            const roomId = $(this).data('room-id');

            // Display SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Call the delete action if the user confirms
                    deleteRoom(roomId);
                }
            });
        });

        // Function to handle the delete action
        function deleteRoom(roomId) {
            // Make an AJAX request to delete the room record
            $.ajax({
                url: '/delete-room/' + roomId, // Adjust the URL to your delete action endpoint
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    // Handle the response, for example, display a success message
                    Swal.fire(
                        'Deleted!',
                        'The room has been deleted.',
                        'success'
                    ).then((result) => {
                        // Reload the page after the user clicks "OK" on the success message
                        location.reload();
                    });
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Handle errors if needed
                    Swal.fire(
                        'Error!',
                        'An error occurred while deleting the room.',
                        'error'
                    );
                }
            });
        }
    });
</script>
@endsection