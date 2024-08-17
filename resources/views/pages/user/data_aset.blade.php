<!-- Modal -->
<div class="modal fade" id="artModal" tabindex="-1" role="dialog" aria-labelledby="artModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="artModalLabel">Detail Anggota Rumah Tangga (ART)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Table to display ART details will be dynamically loaded here -->
                <div id="artTable">
                    <p>Loading...</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal untuk Aset -->
<div class="modal fade" id="modalAset" tabindex="-1" role="dialog" aria-labelledby="modalAsetLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAsetLabel">Detail Aset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalAsetContent">
                <!-- Detail Aset akan dimuat di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal untuk Perumahan -->
<div class="modal fade" id="modalRumah" tabindex="-1" role="dialog" aria-labelledby="modalRumahLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRumahLabel">Detail Perumahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalRumahContent">
                <!-- Detail Perumahan akan dimuat di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    $('#artModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var krtId = button.data('krt-id') // Extract info from data-* attributes
        var modal = $(this)

        // AJAX request to fetch ART data
        $.ajax({
            url: "{{ route('get.art.data') }}", // Route to fetch data
            method: 'GET',
            data: {
                krt_id: krtId
            },
            success: function(response) {
                // Load the response (HTML table) into the modal's body
                modal.find('#artTable').html(response);
            },
            error: function() {
                modal.find('#artTable').html('<p>Error loading data</p>');
            }
        });




    });
</script>

<script>
    $('#modalRumah').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var krtId = button.data('krt-id'); // Extract the krt-id from data-* attributes
        console.log(krtId);
        var modal = $(this)
        // Fetch data based on krt-id
        $.ajax({
            url: '{{ route('rumah.show') }}', // Adjust the URL to your API endpoint
            data: {
                krt_id: krtId
            },
            method: 'GET',
            success: function(response) {
                console.log(response);
                // Load the response (HTML table) into the modal's body
                modal.find('#modalRumahContent').html(response);
            },
            error: function() {
                modal.find('#modalRumahContent').html('<p>Error loading data</p>');
            }

        });
    });
</script>

<script>
    $('#modalAset').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var krtId = button.data('krt-id'); // Extract the krt-id from data-* attributes
        console.log(krtId);
        var modal = $(this)
        // Fetch data based on krt-id
        $.ajax({
            url: '{{ route('aset.show') }}', // Adjust the URL to your API endpoint
            data: {
                krt_id: krtId
            },
            method: 'GET',
            success: function(response) {
                console.log(response);
                // Load the response (HTML table) into the modal's body
                modal.find('#modalAsetContent').html(response);
            },
            error: function() {
                modal.find('#modalAsetContent').html('<p>Error loading data</p>');
            }

        });
    });

  
</script>