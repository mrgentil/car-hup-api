import './bootstrap';
import {post} from "axios";

// $(document).ready(function () {
//     $('#searchForm').on('submit', function (event) {
//         event.preventDefault();
//         const name = $('#nameInput').val();
//         const first_name = $('#first_nameInput').val();
//
//         $.ajax({
//             type: 'POST',
//             url: "{{ route('search.post') }}",
//             data: {
//                 _token: '{{ csrf_token() }}',
//                 name: name,
//                 first_name: first_name
//             },
//             success: function (data) {
//                 $('#resultsContainer').html(data);
//             }
//         });
//     });
// });

