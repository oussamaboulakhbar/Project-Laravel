<x-master>
    <div class="container mx-auto p-4 bg-white p-6 rounded shadow-md">
        @if (session('success'))
        @include('partials.flashbag')
        @endif
        <table id="matches-table" class="display stripe hover" style="width:100%">
            <thead>
                <tr>
                    <th>Referee</th>
                    <th>City</th>
                    <th>Team</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Report</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f8f9fa;
            }
            table{
                margin-top: 10px;
            }
            table.dataTable {
                width: 100% !important;
                border-collapse: collapse !important;
                border-radius: 0.25rem !important;

            }

            table.dataTable thead th {
                background-color: #343a40;
                color: white;
                font-weight: bold;
                padding: 10px;
            }

            table.dataTable tbody tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            table.dataTable tbody tr:hover {
                background-color: #ddd;
            }

            table.dataTable tbody td {
                text-align: center;
                /* Center body text */
            }

            .dataTables_wrapper .dataTables_filter input {
                border: 1px solid #343a40;
                border-radius: 0.25rem;
                padding: 5px;
            }

            .view-report-button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
            }

            .view-report-button:hover {
                background-color: #0056b3;
            }
            .dataTables_length select {
                width: 50px;
            }
            .dataTables_filter{
                margin-bottom: 15px
            }

        </style>
        <script>
            $(document).ready(function() {
                $('#matches-table').DataTable({
                    ajax: '/matches',
                    columns: [{
                            data: 'referee_name'
                        },
                        {
                            data: 'city'
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return data.visiting_team + ' X ' + data.local_team;
                            }
                        },
                        {
                            data: 'category'
                        },
                        {
                            data: 'date_match'
                        },
                        {
                            data: 'report_match',
                            render: function(data, type, row) {
                                return `
                                <div style="display: flex; justify-content: center;">
                                    <a href="/download/${data}" target="_blank" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>`;
                            }
                        },
                        {
                            data: 'id',
                            render: function(data, type, row) {
                                return `
                                <div style="display: flex; justify-content: center;">
                                    <form action="{{ url('/matches') }}/${data}" method="post" onsubmit="return confirm('Are you sure you want to delete this match?');">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" style="border:none; background:none;">
                                            <svg class="flex-shrink-0 w-5 h-5 text-red-500 transition duration-75 dark:text-red-400 group-hover:text-red-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>`;
                            }
                        }
                    ],
                    responsive: true,
                    pageLength: 7,
                    lengthMenu: [7, 10, 20, 50],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search ",
                    },
                });
            });
        </script>
    </div>
</x-master>
